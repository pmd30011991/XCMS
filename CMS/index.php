<?php

/* first define some constants */
define('ABSDIR',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('US','/');
define('CLASS_DIR',ABSDIR.DS.'classes');
define('ADMIN_DIR',ABSDIR.DS.'admin');
define('CONFIG_DIR',ABSDIR.DS.'config'); 
define('THEME_DIR',ABSDIR.DS.'themes');  
	/* Load */
	require_once('load.php');
?>