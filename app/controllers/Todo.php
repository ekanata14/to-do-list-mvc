<?php

class Todo extends Controller{
    public function addTodo(){
        $data = [
            'todo' => $_POST['todo']
        ];

        if($this->model("Todo_model")->addTodo($data) > 0){
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/home");
        }
    }

    public function done(){
        $data = [
            'id' => $_POST['id']
        ];

        if($this->model("Todo_model")->done($data) > 0){
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/home");
        }
    }

    public function undone(){
        $data = [
            'id' => $_POST['id']
        ];

        if($this->model("Todo_model")->undone($data) > 0){
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/home");
        }
    }

    public function delete(){
        $data = [
            'id' => $_POST['id']
        ];

        if($this->model("Todo_model")->delete($data) > 0){
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/home");
        }
    }
}