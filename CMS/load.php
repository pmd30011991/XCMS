<?php

/* Load some file use to initilization */
require_once(CONFIG_DIR.DS.'constants.php');
require_once(CLASS_DIR.DS.'Loader.php');
require_once(ABSDIR.DS.'functions.php');
    
    
    
 /* Start import Class  */
 Loader::import('Database');
 Loader::import('Setting');
 Loader::import('Request');
 Loader::import('Theme');
 Loader::import('Session');

    
 /*Create instance of objects */
 Setting::getInstance();
 Request::getInstance();
 Theme::getInstance();
 Session::getInstance();
 
 /*Debug */
 
 pr(Request::$QUERY);
    
?>