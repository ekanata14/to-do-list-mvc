<?php

class Home extends Controller{
    public function index(){
        $data['title'] = "To Do List";
        $data['users'] = $this->model("User_model")->getAllUsers();
        $data['todos'] = $this->model('Todo_model')->getAllTodos();        
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}