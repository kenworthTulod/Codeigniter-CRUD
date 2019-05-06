<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_control extends CI_Controller {
	
	public function __construct(){		 //difference when using 'public' and not?
		parent::__construct();
		$this->load->model('CRUD_model', 'model');
	}

	public function index(){
		$data['results'] = $this->model->readDB();
		$this->load->view('layout/CRUD_header');
		$this->load->view('CRUD/CRUD_view', $data);
		$this->load->view('layout/CRUD_footer');
	}

	//Add page
	public function CRUD_create(){
		$this->load->view('layout/CRUD_header');
		$this->load->view('CRUD/CRUD_create');
		$this->load->view('layout/CRUD_footer');
	}

	//Pass data from the 'Add' page to CI_model and do the logic to create new data
	public function submit(){
		$result = $this->model->submit();
		redirect(base_url('CRUD_control'));
	}

	//Edit page
	public function CRUD_edit($id){
		$data['row'] = $this->model->getID($id);
		$this->load->view('layout/CRUD_header');
		$this->load->view('CRUD/CRUD_edit', $data);
		$this->load->view('layout/CRUD_footer');
	}	

	//Pass data from the 'Edit' page to CI_model and do the logic to update data
	public function update($id){
		$this->model->update($id);
		redirect(base_url('CRUD_control'));
	}


	//Pass data from the 'Index' page to CI_model and do the logic to delete data
	public function CRUD_delete($id){
		$result = $this->model->delete($id);
		redirect(base_url('CRUD_control'));
	}

}
