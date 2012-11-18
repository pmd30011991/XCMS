<?php 
    Loader::import(Database);
    class Page extends Database{
        
        public $id;
        public $layout;
        public $content;
        private $db;
        public function __construct() {
            $db = parent::getInstance();
        }
        public function get($id){
            $result = $db->getById($id);
            $this->id = $result['id'];
            $this->content = $result['content'];
            $this->layout = $result['layout'];
        }
        
        

    }
?>