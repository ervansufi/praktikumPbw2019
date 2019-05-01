<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
	{
		$this->load->view('register');
    }
    
    public function addUser(){
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => md5($password)
        );
        $this->user_model->insert('users', $data);  
        redirect(base_url('index.php/login'));      
    }
    
}
