<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_model extends CI_Model  //what is "CI" stands for in every 'model', 'controller'?
{
	public function __construct()
	{
		$this->load->database();
	}

	//validate the entry during login
	public function validate(){
		$arr['user_name'] = $this->input->post('username');
		$arr['password'] = $this->input->post('password');
		 return $this->db->get_where('user',$arr)->row();
	}

	//This will insert into database
	public function submit()
	{
		$data = array(
			'last_name' => $this->input->post('lastname'),
			'first_name' => $this->input->post('firstname'),
			'gender' => $this->input->post('gen_rad'),
			'user_id' => $this->input->post('userid'),
			'college' => $this->input->post('coll'),
			'contact_num' => $this->input->post('contactnum'),
			'birthdate' => $this->input->post('birth'),
			'message' => $this->input->post('mess'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$this->db->insert('crud_tbl',$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	//This is to read data from database
	public function readDB(){
		$query = $this->db->get('crud_tbl');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function getID($id){
		$this->db->where('id', $id);
		$query = $this->db->get('crud_tbl');
		if($query->num_rows() > 0){
			return $query->row();
		}else
		{
			return false;
		}
	}

	public function update($id){
		$data = array(
			'last_name' => $this->input->post('lastname'),
			'first_name' => $this->input->post('firstname'),
			'gender' => $this->input->post('gen_rad'),
			'user_id' => $this->input->post('userid'),
			'college' => $this->input->post('coll'),
			'contact_num' => $this->input->post('contactnum'),
			'birthdate' => $this->input->post('birth'),
			'message' => $this->input->post('mess'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('crud_tbl', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('crud_tbl');
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}
