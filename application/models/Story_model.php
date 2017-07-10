<?php 

class Story_model extends CI_Model{
	
	public function post(){
		$roar = array('title' =>  $this->input->post('title'),
					  'img_story' => $this->upload->data('file_name'),
					  'desc' => $this->input->post('desc'),
					  'date' => date("Y-m-d")
		);
		$this->db->insert('tb_story',$roar);
	}

	public function storyAll(){
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