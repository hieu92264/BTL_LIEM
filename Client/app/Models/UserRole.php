<?php
class UserRole
{
    public $db;
    function __construct()
    {
        $this->db = new Database();
    }
    public function getData()
    {
        $sql = "select * from user_role";
        return $this->db->pdo->query($sql)->fetchAll();
    }
}
