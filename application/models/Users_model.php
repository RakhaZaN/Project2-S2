<?php

class Users_model extends CI_Model{
    protected $table = 'users';

    public function getAll()
    {
        // Query
        $query = $this->db->get($this->table);
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

	public function login($uname,$pass){
		$sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";
		$data = [$uname,$pass];
		$query = $this->db->query($sql,$data);
		return $query->row();
	}
}

?>