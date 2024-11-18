<?php

class User
{
    public $db;
    function __construct()
    {
        $this->db = new Database();
    }

    public function getUsers()
    {
        $sql = "select * from users";
        return $this->db->pdo->query($sql)->fetchAll();
    }

    public function getUserByEmail($request)
    {
        $sql = "select * from users where email=$request->email";
        return $this->db->pdo->query($sql)->fetchAll();
    }
}
