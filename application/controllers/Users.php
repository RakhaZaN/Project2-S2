<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Users_model','users');
    }

	public function index()
	{
		$data['page'] = 'Users';
		
		$data['lists'] = $this->users->getAll();
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('users/index', $data);
		$this->load->view('layouts/footer');
	}
	
	public function create()
	{
		$data['page'] = 'Tambah User';
		$data['isEdit'] = false;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('users/input', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$data_post = $this->input->post();

		$data['username'] = $data_post['inUsername'];
		$data['email'] = $data_post['inEmail'];
		$data['status'] = $data_post['inStatus'];
		$data['role'] = $data_post['inRole'];
		$data['password'] = md5($data_post['inPassword']);

		$this->users->insertOrUpdate($data);

		redirect(base_url('users/'));
	}

	public function edit(){
        $data['page'] = "Edit Profile User";
		$data['isEdit'] = true;

		$id = $this->input->get('id');
		$data['data'] = $this->users->find($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('Users/input', $data);
        $this->load->view('layouts/footer');
    }

	public function update()
	{
		$data_post = $this->input->post();
		
		$data['id'] = $data_post['id'];
		$data['username'] = $data_post['inUsername'];
		$data['email'] = $data_post['inEmail'];
		$data['status'] = $data_post['inStatus'];
		$data['role'] = $data_post['inRole'];
		if (strlen($data_post['inPassword']) !== 0) {
			$data['password'] = md5($data_post['inPassword']);
		}
		// var_dump($data);die;
		
		$this->users->insertOrUpdate($data, true);

		redirect(base_url('users/'));
	}

	public function delete($id)
	{
		$this->users->delete($id);

		redirect(base_url('users/'));
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
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        
        $row = $this->users->login($_username,$_password);
        if(isset($row)){//Jika Users Ada
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
			$this->session->set_userdata('isLogin', true);
			
            redirect(base_url().'home');
        }else{//jika users tidak ada atau salah
            redirect(base_url().'Users/login?status=f');
        }
    }

    public function register(){
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

    public function updateProfile(){
        
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_id_edit = $this->session->userdata('USER')->id;

        $data_update[] = $_username;
        $data_update[] = $_password;
        $data_update[] = $_email;
        $data_update[] = $_id_edit;
        
        $this->users->update($data_update);
        $row = $this->users->find($this->session->userdata('USER')->id);
        if(isset($row)){//Jika Users Ada
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            redirect(base_url().'Users/profile');
        }

        redirect(base_url().'Users/profile');
    }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
