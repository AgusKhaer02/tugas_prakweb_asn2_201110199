<?php

class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function login($username, $password)
	{
		
		$this->db->select("id_user, username, password");
		$this->db->from("user");
		$where = [
			'username' => $username,
			'password' => $password,
		];
		$this->db->where($where);

		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			$result = $query->row();
			return $result;
		}

		return false;
	}
}

?>
