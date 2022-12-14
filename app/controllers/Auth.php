<?php

class Auth extends Controller{
    public function index(){
        $this->view('templates/authHeader');
        $this->view('auth/index');
        $this->view('templates/footer');
    }

    public function register(){
        $this->view('templates/authHeader');
        $this->view('auth/register');
        $this->view('templates/footer');
    }

    public function login(){
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        if($this->model("Auth_model")->authByUsername($data['username'], $data['password']) > 0){
            session_start();
            $user = $this->model('User_model')->getUserByUsername($data['username']);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'pass' => $user['pass']
            
            ];
            unset($_POST);
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/auth");
        }
    }

    public function regisUser(){
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        if($this->model("Auth_model")->register($data) > 0){
            header("Location: " . BASE_URL . "/auth");
        } else{
            echo "Location: " . BASE_URL . "/auth/register";
        }
    }

    public function logout(){
        session_destroy();
        session_unset();
        header("Location: " . BASE_URL . "/login");
    }
}