<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class JenisWisata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load model
		$this->load->model('JenisWisata_model', 'jw');
	}
	
	public function index()
	{
		$data['page'] = 'Jenis Wisata';

		$list_jenis_wisata = $this->jw->getAll();
		$data['lists'] = $list_jenis_wisata;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/jenis_wisata/index', $data);
		$this->load->view('layouts/footer');
	}

	public function show($id)
	{
		$data['page'] = 'Detail Jenis Wisata';

		$find = $this->jw->find($id);
		$data['data'] = $find;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/jenis_wisata/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['page'] = 'Tambah Jenis Wisata';
		$data['isEdit'] = false;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/jenis_wisata/input', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$data_post = $this->input->post();

		$data['nama'] = $data_post['inNama'];

		$this->jw->save($data);

		redirect(base_url('jeniswisata/'));
	}

	public function edit()
	{
		$data['page'] = 'Ubah Jenis Wisata';

		$id = $this->input->get('id');
		$data['isEdit'] = true;

		$find = $this->jw->find($id);
		// var_dump($find);die;
		$data['data'] = $find;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/jenis_wisata/input', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$data_post = $this->input->post();

		$data['id'] = $data_post['id'];
		$data['nama'] = $data_post['inNama'];

		$this->jw->save($data, true);

		redirect(base_url('jeniswisata/'));
	}

	public function delete($id)
	{
		$this->tw->delete(array('id' => $id));

		redirect(base_url('jeniswisata/'));
	}

}
