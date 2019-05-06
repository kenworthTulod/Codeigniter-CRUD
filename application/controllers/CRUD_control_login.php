<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_control_login extends CI_Controller {
	
	public function __construct(){		 //difference when using 'public' and not?
		parent::__construct();
		$this->load->model('CRUD_model', 'model');
	}

	public function index(){
		$this->load->view('CRUD/CRUD_login');
	}

	//verify the inputed username and password
	public function verify(){
		$this->load->model('CRUD_model');
		$check = $this->model->validate();

		if($check){
			redirect(base_url('CRUD_control'));
		}else{
			redirect(base_url('CRUD_control_login'));
		}
	}

	public function logout(){
		redirect(base_url('CRUD_control_login'));
	}

}
