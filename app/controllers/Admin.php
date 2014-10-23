<?php
/**
 * Description of admin
 *
 * @author Adem
 */
class Admin extends Controller {
    
    //put your code here
    public function __construct(){
        //Controller class'ından Türetilen __construct Methodu
        parent::__construct();
    }
    
    public function login(){
        //Oturum Kontrolü
        Session::init();
        if(Session::get('login') == TRUE){
            header("location: " . SITE_URL . "/panel/home");
        }
        
        $this->load->view("admin/loginForm");
    }
    
    public function runLogin(){        
        $data = array(
            ":kadi" => $_POST['username'],
            ":parola" => sha1($_POST['password']),
        );
        
        //veri tabanı işlemleri başarılı
        $Admin_Model = $this->load->model("Admin_Model");
        $result = $Admin_Model->userControl($data);
        if($result == FALSE){
            //yanlış bilgi girildi
            header("location: " . SITE_URL . "/admin/login");
        }else{
            Session::init();
            Session::set("login", TRUE);
            Session::set("username", $result[0]["kadi"]);
            Session::set("userId", $result[0]["id"]);

            header("location:". SITE_URL . "/panel/home");            
        }
        
    }
    
    public function logout(){
        session::init();
        session::destroy();
        header("location:". SITE_URL . "/admin/login");
    }
}
