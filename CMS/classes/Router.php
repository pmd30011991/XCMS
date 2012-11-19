<?php
class Router
{
    private static $_instance;
    public function __construct()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$_instance))
            self::$_instance = new Router();
        return self::$_instance;
    }
    public static function route($url){
        
    }


}
?>