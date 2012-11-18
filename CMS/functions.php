<?php
    // for debug
    function pr($v){
        echo '<pre>';
        print_r($v);
        echo '</pre>';
        
    }
     function get_theme_name(){
        return Setting::get("theme_name");
    }
    function get_header(){
        Theme::get_site_element('header');
    }
    
    function get_footer(){
        Theme::get_site_element('footer');
    }
    
    
    function get_site_url(){
       return Request::get_site_url(); 
    }

?>