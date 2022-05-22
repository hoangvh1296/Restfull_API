<?php
class controller{
    private $db;
    private $conn;
    function __construct(){
        $this->db = new db;
        $this->db->connect();
    }
    static public function load_view($view){
        require_once "./views/$view";
    }

}