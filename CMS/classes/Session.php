<?php
ob_start();
session_start();
class Session
{

    private static $_instance;
    private static $session;
    public function __construct()
    {
        self::$session = &$_SESSION;
    }
    public static function getInstance()
    {
        if (!isset(self::$_instance))
            self::$_instance = new Session();
        return self::$_instance;
    }
    public static function clear()
    {
        session_destroy();
    }
    public static function write($str, $value)
    {

        $arr = explode('.', $str);
        $current = &self::$session;
        if (count($arr) > 0) {
            foreach ($arr as $key) {
                if (!isset($current[$key]))
                    $current[$key] = $value;
                $current = &$current[$key];
            }
        }
    }
    public static function read($str)
    {

        $arr = explode('.', $str);
        $current = &self::$session;
        if (count($arr) > 0) {
            foreach ($arr as $key) {
                if (!isset($current[$key]))
                    $current[$key] = $value;
                $current = &$current[$key];
            }
        }
        return $current;
    }

}
?>