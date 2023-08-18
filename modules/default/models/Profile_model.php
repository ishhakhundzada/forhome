<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	}

	public function readdata($params){
		$query = $this->db
		->select("first_name,last_name,email,id")
		->where("id",$params["id"])
		->from('users')->get();
		$user_data = $query->row_array();
		return rest_response(

			Status_codes::HTTP_OK,
			lang("OK"),
			$user_data
		);
	}
	}
