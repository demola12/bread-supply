<?php 

class Myfunctions extends CI_Model
{
    
    public function isauth(){
        if(isset($_SESSION['bread_delivery_admin'])){
            return true;
        }else{
            return false;
        }
    }
    
    
   
    public function generatecode($max='20'){
        $str='ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789';
        $pssgen=str_shuffle($str);
        $pssgen=substr($pssgen,1,$max);
        return $pssgen;
        
    }
public function clearsession($para){
    if(isset($_SESSION[$para])){
        $red=$_SESSION[$para];
        unset($_SESSION[$para]);
        return $red;
        
    }else{
        return '';
    }
}

    public function sendemailwelcome($sendee,$message,$subject){
        $settings=$this->db->get_where('settings',array('id'=>1))->row();
        $header  = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html; charset: utf8\r\n";
        $header .= "From: ".$settings->contactemail;
        
        mail($sendee,$subject,html_entity_decode($message), $header);
            
        }
}
