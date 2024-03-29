<?php 
    class Request {
        public static $SCHEME;
        public static $HOST;
        public static $PORT;
        public static $PATH;
        public static $QUERY;
        private static $_instance;
        public function __construct() {
            $protocol ="http";
            $host = $_SERVER['SERVER_NAME'];
            $port = $_SERVER['SERVER_PORT'];
            $uri = $_SERVER['REQUEST_URI'];
            $url = $protocol.'://'.$host.':'.$port.$uri;
            $url_element = parse_url($url);
            self::$SCHEME = $url_element['scheme'];
            self::$HOST = $url_element['host'];
            self::$PORT = $url_element['port'];
            self::$PATH = $url_element['path'];
            self::$QUERY = $url_element['query'];
        }
        
        public static function getInstance(){
            if(!isset(self::$_instance))
                self::$_instance = new Request();
            return self::$_instance;
        }
        public static function get_site_url(){
            if(self::$PORT==80)
                return self::$SCHEME.'://'.self::$HOST.self::$PATH;
            else
                return self::$SCHEME.'://'.self::$HOST.':'.self::$PORT.self::$PATH;
        }

    }
?>