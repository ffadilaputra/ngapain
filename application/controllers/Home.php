<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Story_model');
    }

    public function index(){
    	 
   	if ($this->session->userdata('logged_in')) {
    	$session_data = $this->session->userdata('logged_in');
    	if ($session_data['level'] === 'user') {
    		$this->load->view('partials/h-user');

            $data['list'] = $this->Story_model->storyAll();
            $this->load->view('user-dashboard',$data);
    		
    	}elseif($session_data['level'] === 'admin'){
    			//$this->load->view('partials/header-user');
    	}
    	}else{
    		$this->load->view('partials/header');
    		$this->load->view('home');
    	}	 
    }
}

