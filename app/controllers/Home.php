<?php

class Home extends Controller{
    public function index(){
        $data['title'] = "To Do List";
        $data['users'] = $this->model("User_model")->getAllUsers();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}