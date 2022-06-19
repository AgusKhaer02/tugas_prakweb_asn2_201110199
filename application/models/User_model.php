<?php




class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function selectAll()
    {
        $this->db->select("*");
        $this->db->from("user");
        $query = $this->db->get();
    
        return $query->result_array();
    }

	public function selectBy($where)
    {
        $this->db->select("*");
		$this->db->where($where);
        $this->db->from("user");
        $query = $this->db->get();
    
        return $query->row();
    }

	public function add_user($data)
	{
		return $this->db->insert('user',$data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		return $this->db->delete('user');
	}

	public function update($where, $data)
	{
		$this->db->where($where);
        return $this->db->update('user', $data);
	}
}
