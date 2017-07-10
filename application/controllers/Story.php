<?php

class Story extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Story_model');
	}

	public function make(){
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('desc','desc','trim|required');		
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('make_story');
		}else {

			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = '1000000000';

        	$this->load->library('upload', $config);

        	if(!$this->upload->do_upload('image')){
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); 
        		var_dump($_POST);
        	}else{

	        $image_data = $this->upload->data();				
        	$this->Story_model->post();
        	
        	$this->session->set_flashdata('msg_success', 'Story has been created');
        	redirect('home','refresh');
	}
}
}
	public function ajax_view(){
		$this->load->library('Datatables');
        $this->datatables->select('id_story,title,date')->from('tb_story');
        echo $this->datatables->generate();
	}

	public function ajax_search(){
		$this->load->view('datatable_search');
	}

	public function list(){
		$data['list'] = $this->Story_model->getAll();
		$this->load->view('user_dashboard',$data);
	}

}
