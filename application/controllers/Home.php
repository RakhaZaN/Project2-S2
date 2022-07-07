<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'user');
		$this->load->model('TempatWisata_model', 'tw');
		$this->load->model('JenisWisata_model', 'jw');
		$this->load->model('Kecamatan_model', 'k');
	}

    public function index()
    {
		$data['page'] = "Home";

		$data['list_tempat_wisata'] = $this->tw->getAllJoin();
		// var_dump($data['list_tempat_wisata']);die;

        $this->load->view('layouts/public/header', $data);
        $this->load->view('layouts/public/navbar');
        $this->load->view('landing', $data);
        $this->load->view('layouts/public/footer');
    }

	public function admin()
	{
		$data['page'] = "Dashboard";

		$data['list_user'] = $this->user->getAll();
		$data['list_tempat_wisata'] = $this->tw->getAll();
		$data['list_jenis_wisata'] = $this->jw->getAll();
		$data['list_kecamatan'] = $this->k->getAll();
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('layouts/footer');
	}
}
