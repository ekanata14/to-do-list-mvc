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

    public function updateUser($data){
        $this->db->query("UPDATE {$this->table} SET username = :username, email = :email WHERE id = :id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        return $this->db->rowCount();
    }
}