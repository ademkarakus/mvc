<?php

//Sistem Dosyalarını include ediyoruz.
include_once 'system/libs/Controller.php';
include_once 'system/libs/load.php';
include_once 'system/libs/model.php';
include_once 'system/libs/DataBase.php';
//Bootstrap Bölümü

$url=isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != NULL){
    
    $url=  rtrim($url, "/");
    $url = explode("/", $url);
}else{
    unset($url);
}

if(isset($url[0])){

    include "app/controllers/".$url[0].".php";
    $c=new $url[0]();
    
    if(isset($url[2])){
        
        $c->$url[1]($url[2]);
    }else{
        if(isset($url[1])){
            
            $c->$url[1]();
        }else{
            echo "hata2";
        }
    }
}else{
     include "app/controllers/Index.php";
     
     $c = new Index();
     $c->anasayfa();
}


?>