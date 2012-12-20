<?php

/* first define some constants */
define('ABSDIR',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('US','/');
define('CLASS_DIR',ABSDIR.DS.'classes');
define('ADMIN_DIR',ABSDIR.DS.'admin');
define('CONFIG_DIR',ABSDIR.DS.'config'); 
define('THEME_DIR',ABSDIR.DS.'themes');  

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