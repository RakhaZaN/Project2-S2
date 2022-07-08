<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komentar_model', 'kom');
	}

	public function store()
	{
		
		$data_post = $this->input->post();

		// Set data
		$data['tanggal'] = date('Y-m-d');
		$data['isi'] = $data_post['komentar'];
		$data['nilai_rating_id'] = $data_post['nilai_rating'];
		$data['users_id'] = $data_post['user_id'];
		$data['wisata_id'] = $data_post['wisata_id'];
		// var_dump($data);

		$this->kom->save($data);

		redirect($data_post['back_url']);
	}

}
