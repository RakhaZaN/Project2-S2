<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load model
		$this->load->model('Kecamatan_model', 'kc');
	}
	
	public function index()
	{
		$data['page'] = 'Kecamatan';

		$list_kecamatan = $this->kc->getAll();
		$data['lists'] = $list_kecamatan;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/kecamatan/index', $data);
		$this->load->view('layouts/footer');
	}

	public function show($id)
	{
		$data['page'] = 'Detail Kecamatan';

		$find = $this->kc->find($id);
		$data['data'] = $find;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/kecamatan/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['page'] = 'Tambah Kecamatan';
		$data['isEdit'] = false;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/kecamatan/input', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$data_post = $this->input->post();

		$data['nama'] = $data_post['inNama'];

		$this->kc->save($data);

		redirect(base_url('kecamatan/'));
	}

	public function edit()
	{
		$data['page'] = 'Ubah Kecamatan';

		$id = $this->input->get('id');
		$data['isEdit'] = true;

		$find = $this->kc->find($id);
		// var_dump($find);die;
		$data['data'] = $find;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/kecamatan/input', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$data_post = $this->input->post();

		$data['nama'] = $data_post['inNama'];


		$this->kc->save($data, true);

		redirect(base_url('kecamatan/'));
	}

	public function delete($id)
	{
		return $this->kc->delete(array('id' => $id));
	}

}
