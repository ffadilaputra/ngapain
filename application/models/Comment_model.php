<?php 


class Comment_model extends CI_Model {

	public function reply(){

		$data = array('fk_user'  => $this->input->post('fk_user'),
					  'fk_story' => $this->input->post('fk_story'),
					  'coment'   => $this->input->post('comment'),
					  'time'     => date("h:i:sa"),	

		);
		$this->db->insert('tb_comment',$data);
	}

	public function allComment($id){
		$this->db->select('*');
		$this->db->from('tb_comment');
		$this->db->join('tb_user','tb_user.id = tb_comment.fk_user','left');
		$this->db->where('fk_story',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function delComment($id){
		$this->db->where('id',$id);
		$delete = $this->db->delete('tb_comment');
	}

}