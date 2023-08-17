<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


  function __construct(){
    parent::__construct();
    // $this->db = $this->load->database("test_db",true);
  }

	function action($params){

		$query= $this->db ->select("*")
											->from("users")
											->where("email","email")
											->where("deleted_at",null)
											->get();
		$user = $this->db->row_array();

		if (!$query->num_rows()) {
      return rest_response(
        Status_codes::HTTP_CONFLICT,
        "User not found"
      );
    }

    if (!password_verify($password,$user["password"])) {
      return rest_response(
        Status_codes::HTTP_BAD_REQUEST,
        lang("Wrong email or password")
      );
    }
		  return rest_response(
        Status_codes::HTTP_OK,
        "Successfully logged in",
        $user
      );
	}
}
