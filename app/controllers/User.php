<?php
session_start();

class User extends Controller{
    public function updateUser(){

        $data = [
            'id' => $_POST['id'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'img' => $_FILES['img']['name']
        ];

        // Move image to another folder
        $file_name = $data['img'];
        $image = DIR_FOLDER . $file_name;
        move_uploaded_file($_FILES['img']['tmp_name'], $image);
        
        if($this->model("User_model")->updateUser($data) > 0){
            header("Location:" . BASE_URL . "/home");
            $user = $this->model("User_model")->getUserByUsername($data['username']);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'pass' => $user['pass'],
                'img' => $user['img']
            ];

        } else{
            header("Location:" . BASE_URL . "/home");
        }
    }
}