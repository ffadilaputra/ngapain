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

	public function getById($id){
		$this->db->from('tb_user');
		$this->db->where('id',$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}
	}

	public function edit($id){
		$array = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email'    => $this->input->post('email'),
			'avatar'   => $this->upload->data('file_name'),
			'bio'      => $this->input->post('bio'),
			'level'    => 'user'
		);
		$this->db->where('id',$id);
		$this->db->update('tb_user',$array);

	}

	public function getUser(){
		$query = $this->db->get('tb_user');
		return $query->result();
	}

}