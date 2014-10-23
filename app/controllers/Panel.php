<?php
/**
 * Description of panel
 *
 * @author Adem
 */
class Panel extends Controller{
    //put your code here
    public function __construct(){
        parent::__construct();
        
        //Oturum Kontrolü
        Session::init();
        if(Session::get('login') == FALSE){
            Session::destroy();
            header("location: " . SITE_URL . "/admin/login");
        }
    }
    
    public function home(){
        $data["homepage"] = array(
            "username" => session::get("username"),
        );
        $this->load->view("panel/home", $data);
    }
}
