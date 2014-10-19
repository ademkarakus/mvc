<?php
/**
 * Description of index
 *
 * @author Adem
 */
class Index extends Controller {
    //put your code here
    public function __construct(){
        parent::__construct();
        
    }
    public function anasayfa(){
        $this->load->view("anasayfa");
    }
    
    
    //models classı
    public function isimListele(){
        $Index_model = $this->load->model("Index_model");
        $data['isimListele'] = $Index_model->isimListele();
        
        $this->load->view("isimListele", $data);
    }
}
