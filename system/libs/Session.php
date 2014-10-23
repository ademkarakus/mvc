<?php
/**
 * Description of Session
 *
 * @author Adem
 */
class Session {
    //session oturum başlatma
    public static function init(){
        session_start();
    }
    
    
    public static function set($key, $val){
        $_SESSION[$key] = $val;
    }
    
    public static function get($key){        
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return FALSE;
        }
    }

    //session oturum sonlandırma
    public static function destroy(){
        session_destroy();
    }
}
