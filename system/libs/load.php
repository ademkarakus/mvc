<?php
/**
 * Description of load
 *
 * @author Adem
 */
class load {
    public function __construct() {
        
    }
    
    public function view($fileName, $data = FALSE){
        if($data == TRUE){
            extract($data);
        }
        include "app/views/" . $fileName . "_view.php";
        
    }
    
    public function model($fileName){
        include "app/models/" . $fileName . ".php";
        return new $fileName();
        
    }
    
}
