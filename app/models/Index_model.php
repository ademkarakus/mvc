<?php
/**
 * Description of Index_model
 *
 * @author Adem
 */
class Index_model extends Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    //İsimListele select işlemleri
    public function isimListele(){
        $sql = "SELECT * FROM baslik";
        
        return $this->db->select($sql);
    }
    
    //makaleKaydet insert işlemleri
    public function makaleKaydet($data){
        return $this->db->insert("makaleler", $data);
    }
    
}
