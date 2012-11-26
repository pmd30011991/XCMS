<?php 
    class Authorize extends Database {
        private static $_instance;
        public function __construct() {
            parent::__construct();
        }
        public static function getInstance(){
            if(!isset(self::$_instance))
                self::$_instance = new Authorize();
            return self::$_instance;
        }
        public function login($username , $password){
            $result = $this->getData("user",array(
                'username'=>$username,
                'password'=>md5($password)
            ));
            if($result !== null && count($result)>0)
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