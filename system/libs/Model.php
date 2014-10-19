<?php
/**
 * Description of Model
 *
 * @author Adem
 */
class Model {
    protected $db=array();


    //put your code here
    public function __construct() {
        $dsn = 'mysql:dbname=mvcdb;host=127.0.0.1';
        $user = 'root';
        $password = '';
        
        $this->db = new DataBase($dsn, $user, $password);
    }
}
