<?php

class Auth_model{
    private $table = "user";
    private $db;

    public function __construct(){
        $this->db = new Database();    
    }

    public function authByUsername($username, $pass){
        $this->db->query("SELECT username, pass FROM {$this->table} WHERE username = '$username' AND pass = '$pass'");
        return $this->db->rowCount();
    }

    public function register($data){
        $image = BASE_URL . "/public/assets/images/user.jpg";
        $query = "INSERT INTO `{$this->table}`
        VALUES(
            NULL,
            :username, 
            :email, 
            :pass,
            '$image'
        )";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}