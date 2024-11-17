<?php
class Role
{
    public $db;
    function __construct()
    {
        $this->db = new Database();
    }
    public function getRole()
    {
        $sql = "select * from roles";
        return $this->db->pdo->query($sql)->fetchAll();
    }
}
