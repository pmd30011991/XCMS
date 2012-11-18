<?php 
    Class Loader{
        
        /* Function use to load any class by name any where. */
        public static function import($className){
            require_once(CLASS_DIR.DS.$className.'.php');
        }
        
    }
?>