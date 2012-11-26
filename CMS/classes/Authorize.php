<?php 
    class Authorize extends Database {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function login($username , $password){
            $result = $this->getData("user",array(
                'username'=>$username,
                'password'=>md5($password)
            ));
            
            if(size($result)>0)
            {
                Session::write("Auth.User",$result[0]);
                return true;
            }   
            return false;
        }
        public function logout(){
            if(Session::read("Auth.user"))
                Session::detroy("Auth.User");
        }
        public function isLogin(){
            if(Session::read("Auth.user"))
                return true;
            return false;
        }

    }
?>