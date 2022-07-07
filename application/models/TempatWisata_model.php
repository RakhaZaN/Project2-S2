<?php 


class TempatWisata_model extends CI_Model {
    protected $table = 'tempat_wisata';

    // Get all data
    public function getAll()
    {
        // Query
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getAllJoin()
    {
        // Query
		$this->db->select('*, jw.nama as jenis, k.nama as kecamatan');
		$this->db->from('tempat_wisata tw');
		$this->db->join('jenis_wisata jw', 'jw.id=tw.jenis_id', 'left');
		$this->db->join('kecamatan k', 'k.id=tw.kecamatan_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

	public function find($value, $field='id')
	{
		// Query
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data, $is_update=false)
	{
		// Query
		if ($is_update) {
			$this->db->update($this->table, $data, ['id' => $data['id']]);
		} else {
			$this->db->insert($this->table, $data);
		}
	}

	public function delete($data)
	{
		// Query
		$this->db->delete($this->table, $data);
	}

	public function multipleUpload()
	{
		$this->load->library('upload');
		
		$dataInfo = [];
		for ($i=0; $i < count($_FILES['inFoto']['name']); $i++) { 
			$_FILES['userfile']['name']= $_FILES['userfile']['name'][$i];
			$_FILES['userfile']['type']= $_FILES['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $_FILES['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $_FILES['userfile']['error'][$i];
			$_FILES['userfile']['size']= $_FILES['userfile']['size'][$i];

			$this->upload->initialize($this->uploadConfig('foto'.$i+1));
			$this->upload->do_upload('inFoto');
			$dataInfo[] = $this->upload->data();
		}

		return $dataInfo;
	}
	
	private function uploadConfig($newFilename='')
	{
		$config['upload_path'] = './uploads/tempat-wisata/';
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = true;
		$config['max_width'] = 720;
		$config['max_height'] = 1280;
		$new_name = $this->input->post('id').'_'.$newFilename.'.png';
		$config['file_name'] = $new_name;

		return $config;
	}

}
