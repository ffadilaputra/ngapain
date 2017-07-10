<?php 

class Story_model extends CI_Model{
	
	public function post(){
		$roar = array('title' =>  $this->input->post('title'),
					  'img_story' => $this->upload->data('file_name'),
					  'desc' => $this->input->post('desc'),
					  'date' => date("Y-m-d"),
					  'fk_user' => $this->input->post('fk_user')
		);
		$this->db->insert('tb_story',$roar);
	}

	public function storyAll(){
		$this->db->order_by('date','DESC');
		$read = $this->db->get('tb_story');
        return $read->result();
	}

	public function getById($id){
		$this->db->from('tb_story');
		$this->db->where('id_story',$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}
	}

	public function getByStory($id){
		$this->db->order_by('date','DESC');
		$this->db->from('tb_story');
		$this->db->where('fk_user',$id);
		$getById = $this->db->get();

		return $getById->result();
		
	}

	public function editStory($id){

		$roar = array('title'     =>  $this->input->post('title'),
					  'img_story' =>  $this->upload->data('file_name'),
					  'desc'      =>  $this->input->post('desc'),
					  'date'      =>  date("Y-m-d")
		);
		$this->db->where('id_story',$id);
		$this->db->update('tb_story',$roar);
	}

	public function deleteStory($id){
		$this->db->where('id_story',$id);
		$this->db->delete('tb_story');
	}

}