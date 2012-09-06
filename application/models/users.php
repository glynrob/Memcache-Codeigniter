<?php class Users extends CI_Model {
	
	function getAll(){
		
		$this->db->select("*");
		$this->db->from('users');
        $this->db->join('addresses', 'users.id = addresses.userid', 'right');
		$users = $this->db->get();
		
		return $users->result();
		
	}

}