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


}