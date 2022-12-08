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
}