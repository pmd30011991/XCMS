<?php 

class Database extends PDO{
    private static $_instance;
    private static $dbh;
    public function __construct() {
        self::connect();
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }
    
    /* Connect to Database */
    public static function connect() {
    	try {  
    	   
          # MySQL with PDO_MYSQL 
          self::$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        }  
        catch(PDOException $e) {  
            echo $e->getMessage();  
        }  
    }
    
    public function query($string) {
        $st = self::$dbh->prepare($string);
        $st->execute();
        $result = $st->fetch();
        return $result;
    }
    public function getData($model,$args = array()){
        $where = "";
        foreach ( $args as $key=>$value){
            if($where =="")
                $where .="$key='$value'";
            else
                $where .=" and $key='$value'";
        }
        return $this->query("SELECT * FROM ".$model." where ".$where);
    }
    // hàm l?y 1 record trong database v?i table là tên c?a class du?c g?i tr?c ti?p
    // $id: id c?a record
    public function getById($id){
        $table = strtolower(get_called_class());
        $st = self::$dbh->prepare("SELECT * FROM ".$table." WHERE id=".$id);
        $st->execute();
        $result =$st->fetch();
        return $result;
    }
    
    // hàm l?y các setting trong database
    public static function getSetting($key){
         $st = self::$dbh->prepare("SELECT value FROM `setting` WHERE `key`='".$key."'");
        $st->execute();
        $result =$st->fetch();
        if($result[0])
            return $result[0];
        else 
            return null;
    }
    
    
}
?>