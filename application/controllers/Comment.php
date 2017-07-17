<?php


class Comment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comment_model');
	}

	public function reply(){
		$this->Comment_model->reply();
		// redirect($this->uri->uri_string());
		redirect('home','refresh');
	}
}