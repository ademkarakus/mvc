<?php
/**
 * Description of index
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
        $this->load->view("admin/loginForm");
    }
    
    public function runLogin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //veri tabanı işlemleri başarılı
        
        Session::init();
        Session::set("Login", TRUE);
        Session::set("username", $username);
        
        header("location:". SITE_URL . "/panel");
    }
    
    public function logout(){
        session::init();
        session::destroy();
        header("location:". SITE_URL . "/admin/login");
    }
}
