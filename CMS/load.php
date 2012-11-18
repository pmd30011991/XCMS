<?php 
	require_once(CONFIG_DIR.DS.'constants.php');
    require_once(CLASS_DIR.DS.'Loader.php');
    
    /* Start Load some Class */
    
    Loader::import('Database');
    Loader::import('Setting');
    Loader::import('Request');
    Loader::import('Theme');
    // thi?t l?p bi?n toàn c?c $setting d? s? d?ng load setting du?i database;
    Setting::getInstance();
    Request::getInstance();
    Theme::getInstance();
    //load file functions d? xài toàn c?c.
     require_once(ABSDIR.DS.'functions.php');
     
     pr(Request::get_site_url());
     get_header();
    get_footer();
    
?>