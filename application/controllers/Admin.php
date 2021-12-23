<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Myfunctions');
		//$this->load->library('image_lib');
		date_default_timezone_set('Africa/Lagos');
		//error_reporting(0);

		if (!$this->Myfunctions->isauth()) {
			redirect(base_url() . "login", 'refresh');
		}
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
        $page['addr']="dashboard";
		$this->load->view('index',$page);
	}
    public function user()
	{
        $page['addr']="user";
		$this->load->view('index',$page);
	}
    public function customer()
	{
        $page['addr']="customer";
		$this->load->view('index',$page);
	}
    public function categories()
	{
        $page['addr']="categories";
		$this->load->view('index',$page);
	}
    public function settings()
	{
        $page['addr']="settings";
		$this->load->view('index',$page);
	}
  
}
