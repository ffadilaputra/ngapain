<?php 

class User_model extends CI_Model{

	public function sign($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('tb_user');
			
			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				return false;
			}

		}
	
	public function signup(){

		$array = array(

			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
			'avatar' => 'NULL',
			'bio' => 'NULL',
			'level' => 'user'
		);

		$this->db->insert('tb_user',$array);
	}	
}