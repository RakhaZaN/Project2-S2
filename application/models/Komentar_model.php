<?php

class Komentar_model extends CI_Model
{

	protected $table = 'komentar';
	public function getAll()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function getBy($value, $field='wisata_id')
	{
		$this->db->select('komentar.*, users.username, nr.nama as nilai');
		$this->db->join('users', 'users.id='.$this->table.'.users_id', 'left');
		$this->db->join('nilai_rating nr', 'nr.id='.$this->table.'.nilai_rating_id', 'inner');
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function find($value, $field = 'id')
	{
		// Query
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data, $is_update = false)
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
}
