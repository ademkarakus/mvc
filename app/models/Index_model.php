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
    
    public function isimListele(){
        $sth=$this->db->query("SELECT * FROM deneme");
        $dizi=$sth->fetchAll();
        return $dizi;
    }
    
}
