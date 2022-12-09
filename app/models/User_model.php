<?php

class User_model{
    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }

    public function getUserByUsername($username){
        $this->db->query("SELECT * FROM {$this->table} WHERE username = '$username'");
        return $this->db->result();
    }
}