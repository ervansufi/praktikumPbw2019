<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesbuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('session');
        $this->load->view("layout");
    }

    public function timeline(){
        if(!isset($_SESSION['username'])){
            redirect(base_url());
        }else{
            $username = $_SESSION['username'];;
            $data = array(
                'username'=>$username
            );
            $data['info'] = $this->user_model->getData("status", $data)->result_array();
            $this->load->view("timeline", $data);
        }    
    }

    public function profile(){
        if(!isset($_SESSION['username'])){
            redirect(base_url());
        }else{
            $_data = array(
                'username'=>$_SESSION['username']
            );
            $data['info'] = $this->user_model->getData("users", $_data)->result_array();
            $datas = $this->user_model->getData("users", $_data)->num_rows();
            if($datas > 0){
                $this->load->view("profile", $data);
            }
        }
    }

    public function updateProfile(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        
        $where = array(
            'id'=>$id
        );
        
        $data = array(
            'name' => $name,
            'username' => $username,
            'email' => $email
        );
        $this->user_model->update("users", $data, $where);
        redirect(base_url('index.php/pesbuk/profile'));
    }

    public function addStatus(){
        $username = $_SESSION['username'];
        $status = $this->input->post('status');
        $data = array(
            'username'=>$username,
            'status'=>$status
        );
        $this->user_model->insert('status', $data);  
        redirect(base_url('index.php/pesbuk/timeline'));        
    }
}