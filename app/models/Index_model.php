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
 
    /*
    public function guncelle(){
        $data = array(
            "baslik" => "Yeni Güncellenmiş Basilık",
            "icerik" => "Yeni Güncellenmiş icerik",
            "etiket" => "Yeni Güncellenmiş etiket"
        );
        $this->db->update("makaleler", $data, "id=5");
    }
    
    public function delete(){
        $this->db->delete("makaleler", "id=4");
    } 
     * 
     */    
    
    public function makaleListele(){
        $sql = "SELECT * FROM makaleler";
        
        return $this->db->select($sql);
    }
}
