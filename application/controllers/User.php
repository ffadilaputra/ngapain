<?php 

class User extends CI_Controller{
	
	public function profil(){

		$id = $this->input->post('id');

		if ($this->session->userdata('logged_in')) {
    		$session_data = $this->session->userdata('logged_in');
    		$data['id'] = $session_data['id'];
    	}

		$this->load->model('User_model');

		$data['profil'] = $this->User_model->getById($data['id']);
		$this->load->view('user_profil',$data);

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('bio','bio','trim|required');


		if ($this->form_validation->run() === FALSE) {
			// var_dump($_POST);
		}else {
			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = '1000000000';

        	$this->load->library('upload', $config);

        	if(!$this->upload->do_upload('image')){
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); // Tampil Error Ketika gambar gagal simpan
        		var_dump($_POST);
        	}else{
        	$this->User_model->edit($id);
        		redirect('home','refresh');
        	}
		}

		
	}
	
}
