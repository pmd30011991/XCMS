<?php 
    Loader::import('Database');
    class Theme extends Database {
        
        private static $_instance;
        public function __construct() {
            parent::__construct();
        }
        public static function get_theme_name(){
            return self::getSetting("theme_name");
        }
        public static function get_theme_path(){
            $theme_name = self::get_theme_name();
            return THEME_DIR.DS.$theme_name;    
        }
        public static function get_site_element($name){
            ob_start();
                include(self::get_theme_path().DS.$name.'.php');
            $result = ob_get_clean();
            echo $result;
        }
        
        public static function get_theme_url(){
            return get_site_url().'themes'.US.self::get_theme_name();
        }
        public static function get_css_url($name){
            return self::get_theme_url().US.'css'.US.$name.'.css';
        }
        public static function getInstance(){
            if(!isset(self::$_instance))
            {
                self::$_instance = new Theme();
            }
            
            return self::$_instance;
        }

    }
?>