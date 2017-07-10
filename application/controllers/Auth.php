<?php 

class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	
	public function index(){
		$this->load->view('login');
	}

	public function sign(){
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}else{	
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
					if ($session_data['level'] == 'user') {
						redirect('home','refresh');
					}elseif($session_data['level'] == 'admin'){
						redirect('home','refresh');
					}
			}
		}

	}

	public function cekDb($password){
		$user = $this->input->post('username');
		$result = $this->User_model->sign($user,$password);

		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id' => $row->id,
					'username' => $row->username,
					'level' => $row->level
				 );
				$this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal , Password or Username wrong');
			return false;
		}
	}

	public function signup(){
		//Set Validasi
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home'); 
		}else { 
			$this->User_model->signup();
			$this->session->set_flashdata('msg_success', 'Register Success');
			redirect('home');
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

}