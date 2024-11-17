<?php

class User
{
    public $db;
    function __construct()
    {
        $this->db = new Database();
    }

    public function getUser()
    {
        $sql = "select * from users";
        return $this->db->pdo->query($sql)->fetchAll();
    }
}
