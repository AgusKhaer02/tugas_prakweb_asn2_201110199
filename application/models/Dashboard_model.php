<?php



class Dashboard_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	public function showUserProfile($where)
	{
		$this->db->select('*');
		$this->db->where($where);
		// hanya satu saja yang ditampilkan
		$this->db->limit("1","0");
		$this->db->from('user');


		$query = $this->db->get();

		return $query->row();
	}

}

?>
