<?php
session_start();

class User extends Controller{
    public function updateUser(){
        $data = [
            'id' => $_POST['id'],
            'username' => $_POST['username'],
            'email' => $_POST['email']
        ];

        if($this->model("User_model")->updateUser($data) > 0){
            header("Location:" . BASE_URL . "/home");
            $user = $this->model("User_model")->getUserByUsername($data['username']);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'pass' => $user['pass']
            ];

        } else{
            header("Location:" . BASE_URL . "/home");
        }
    }
}