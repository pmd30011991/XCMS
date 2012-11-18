<?php 
    Class Setting extends Database{
        private static $_instance;
        public function __construct() {
             parent::getInstance();
        }
        public static function getInstance(){
            if(!isset(self::$_instance)){
                self::$_instance = new Setting();
            }
            return self::$_instance;
        }
        public function get($key){
            return $this->getSetting($key);
        }
    }
?>