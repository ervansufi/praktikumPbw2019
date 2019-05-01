<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('session');
    }

    public function index(){
        $this->load->view("login");
    }

    public function doLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->user_model->getData("users", $data)->num_rows();
        if($cek > 0){
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('index.php/timeline'), $data_session);
        }else{
            $data["error"] = "Invalid username and password!";
            $this->load->view('login', $data);
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        $this->load->view('index');
    }
}