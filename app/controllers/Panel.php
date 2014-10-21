<?php
/**
 * Description of adminController
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
}
