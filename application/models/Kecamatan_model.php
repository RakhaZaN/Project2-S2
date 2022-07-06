<?php
class Kecamatan_model extends CI_Model {
    protected $table = 'kecamatan';

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

	public function find($value, $field='id')
	{
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data, $is_update=false)
	{
		if ($is_update) {
			$this->db->update($this->table, $data, ['id' => $data['id']]);
		} else {
			$this->db->insert($this->table, $data);
		}
	}

	public function delete($data)
	{
		$this->db->delete($this->table, $data);
	}


}
