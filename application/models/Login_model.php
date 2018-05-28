<?php
class Login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function fetch_user_login($username,$password)
	{
		$this->db->where('s_username',$username);
		$this->db->where('s_password',$this->salt_pass($password));
		$query = $this->db->get('tb_staff');
		return $query->row();
	}
	public function record_count($username,$password)
	{
		$this->db->where('s_username',$username);
		if(isset($password)){
			$this->db->where('s_password',$this->salt_pass($password));
		}
		
		return $this->db->count_all_results('tb_staff');
	}

	public function salt_pass($password)
	{
		//return md5($password);
		return $password;
	}

	public function read_member($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tb_staff');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function entry_member($id)
	{
 
		$this->name = $this->input->post('s_display_name');
		$this->password = $this->input->post('s_password');
		$this->db->update('tb_staff', $this, array('id'=> $id));
	}
}