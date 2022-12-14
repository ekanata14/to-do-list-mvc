<?php
if(!isset($_SESSION)){
    session_start();
}

class Todo_model{
    private $table = 'todos';
    private $db;
    private $id_user;

    public function __construct(){
        $this->db = new Database();
        $this->id_user = $_SESSION['user']['id'];
    }

    public function getAllTodos(){
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user = {$this->id_user}");
        return $this->db->resultAll();
    }

    public function addTodo($data){
        $this->db->query("INSERT INTO `{$this->table}` VALUES(
            NULL, 
            :todo, 
            false, 
            {$this->id_user})");
        $this->db->bind('todo', $data['todo']);
        return $this->db->rowCount();
    }

    public function done($data){
        $this->db->query("UPDATE {$this->table} SET isDone = true WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->rowCount();
    }

    public function undone($data){
        $this->db->query("UPDATE {$this->table} SET isDone = false WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->rowCount();
    }

    public function search($data){
        $search = $data['search'];
        $this->db->query("SELECT * FROM {$this->table} WHERE todo LIKE '%$search%' AND id_user = {$this->id_user}");
        return $this->db->resultAll();
    }
}