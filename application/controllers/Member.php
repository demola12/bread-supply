<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Myfunctions');
		//$this->load->library('image_lib');
		date_default_timezone_set('Africa/Lagos');
		//error_reporting(0);

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
	{
		$this->load->view('login');
	}
    public function signin(){
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        $data=$this->db->get_where('user',array('email'=>$email))->result();
        if(count($data)>0){
            if($data[0]->password==md5($password)){
                $_SESSION['bread_delivery_admin']=$data[0]->id;
                redirect(base_url()."dashboard",'refresh');
            }else{
                $_SESSION['error_login']="Invalid Credentails";
                redirect(base_url()."login",'refresh');
            }
        }else{
                $_SESSION['error_login']="Invalid Credentail";
                redirect(base_url()."login",'refresh');
        }

    }
}
