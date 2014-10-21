<?php

    //Sistem Dosyalarını otomatik include ediyoruz.
    function __autoload($className){
        include_once 'system/libs/' . $className . '.php';
    }

    //Config Dosyasını include yapıyoruz (daha sonra bootstrap a ekleyebiliriz şimdilik burda dursun)
    include_once 'app/config/Config.php';

    //Bootstrap Bölümü
    $boot = new Bootstrap();

?>