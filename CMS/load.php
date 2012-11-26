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
 Loader::import('Authorize');
    
 /*Create instance of objects */
 Setting::getInstance();
 Request::getInstance();
 Theme::getInstance();
 Session::getInstance();
 Authorize::getInstance();
 
 
 Theme::load();
 /*Debug */
    
?>