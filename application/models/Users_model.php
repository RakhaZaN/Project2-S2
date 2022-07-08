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

	public function insertOrUpdate($data, $is_update=false)
	{
		// Query
		if ($is_update) {
			$this->db->update($this->table, $data, ['id' => $data['id']]);
		} else {
			$this->db->insert($this->table, $data);
		}
	}

	public function save($data){
		$sql = "INSERT INTO users (username,password,email,created_at,last_login,status,role) VALUES (?,MD5(?),?,NOW(),NOW(),?,?)";
		$this->db->query($sql,$data);
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

	public function update($data){
		$sql = "UPDATE users SET username=?,password=MD5(?),email=? WHERE id=?";
		$this->db->query($sql,$data);
	}
}

?>
