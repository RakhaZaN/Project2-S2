<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
		$data['page'] = "Home";
        $this->load->view('landing', $data);
    }

	public function admin()
	{
		$data['page'] = "Dashboard";
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('layouts/footer');
	}
}
