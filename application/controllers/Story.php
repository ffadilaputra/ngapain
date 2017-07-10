<?php

class Story extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Story_model');
		$this->load->helper('text');		
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
		// $this->load->library('Datatables');
  //       $this->datatables->select('id_story,title,date')->from('tb_story');
  //       echo $this->datatables->generate();
		$data['list'] = $this->Story_model->storyAll();
		$this->load->view('datatable_search',$data);
	}

	public function ajax_search(){
		$data['list'] = $this->Story_model->storyAll();
		$this->load->view('datatable_search',$data);
	}

	public function list(){
		$data['list'] = $this->Story_model->getAll();
		$this->load->view('user_dashboard',$data);
	}

	public function edit($id){
		$data['emp'] = $this->Story_model->getById($id);
        $this->load->view('edit_story',$data);

        $this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('desc','desc','trim|required');	

		if ($this->form_validation->run() === FALSE) {
			// $this->load->view('edit_story');
		}else {

			$config['upload_path']   = 'assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size']      = '1000000000';

        	$this->load->library('upload', $config);

        	if(!$this->upload->do_upload('image')){
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); 
        		var_dump($_POST);
        	}else{

        	$path = "assets/upload/";
         	$get_record = $this->Story_model->getById($id);
         	$file = $get_record[0]->img_story;
         	unlink($path . $file);

	        $image_data = $this->upload->data();
        	$this->Story_model->editStory($id);
        	$this->session->set_flashdata('msg_success', 'Story has been update');
        	redirect('home','refresh');
				}
			}
		}

		public function delete($id){
			$this->Story_model->deleteStory($id);
			redirect('home','refresh');

		}

		public function storybyUser($id){
			$this->load->view('partials/h-user');
			$data['list'] = $this->Story_model->getByStory($id);
			$this->load->view('user-dashboard',$data);
		}

		public function read($id){
			$data['detel'] = $this->Story_model->getById($id);			
			$this->load->view('read_story',$data);
		}

}
