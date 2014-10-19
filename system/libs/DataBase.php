<?php
/**
 * Description of DataBase
 *
 * @author Adem
 */
class DataBase extends PDO{
    //put your code here
    public function __construct($dsn, $user, $password) {
        
        parent::__construct($dsn, $user, $password);
        $this->query("SET NAMES UTF8");
        $this->query("SET CHARACTER SET UTF8");  
    }
}
