<?php
class HomeModel{
    public $db;
    function __construct(){
        $this->db = new Database();
    }
    public function getData(){
        $sql = "select * from users";
        return $this->db->pdo->query($sql)->fetchAll();
    }
}