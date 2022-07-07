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
        $_status = $this->input->post('status');//hidden
        $_role = $this->input->post('role');//hidden

        $data_register[] = $_username;
        $data_register[] = $_password;
        $data_register[] = $_email;
        $data_register[] = $_status;//hidden
        $data_register[] = $_role;//hidden

        $this->users->save($data_register);

        redirect(base_url().'Users/login');
    }

    public function profile(){
        $data['page'] = "Profile User";
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('Users/profile', $data);
        $this->load->view('layouts/footer');
    }

}
?>