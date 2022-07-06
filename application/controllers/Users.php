<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Users_model','users');
    }

    public function login(){
        $data['page'] = "Login";
        $this->load->view('Users/login', $data); 
    }

    public function daftar(){
        $data['page'] = "Daftar";
        $this->load->view('Users/daftar', $data);
    }

    public function otentikasi(){
        $this->users;
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        
        $row = $this->users->login($_username,$_password);
        if(isset($row)){//Jika Users Ada
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            redirect(base_url().'home');
        }else{//jika users tidak ada atau salah
            redirect(base_url().'Users/login?status=f');
        }
    }

    public function register(){
        $this->users;
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        // $_created_at = $this->input->post('created_at');
        // $_last_join = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $data_register[] = $_username;
        $data_register[] = $_password;
        $data_register[] = $_email;
        // $data_register[] = $_created_at;
        // $data_register[] = $_last_join;
        $data_register[] = $_status;
        $data_register[] = $_role;

        $this->users->save($data_register);

        redirect(base_url().'Users/login');
    }
}
?>