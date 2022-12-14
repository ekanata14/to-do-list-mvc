<?php

class Home extends Controller{
    public function index(){
        $data['title'] = "To Do List";
        $data['todos'] = $this->model('Todo_model')->getAllTodos();        
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }

    public function search(){
        $data = [
            'search' => $_POST['search']
        ];
        $data['title'] = "To Do List";
        $data['todos'] = $this->model("Todo_model")->search($data);        
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}