<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


  function __construct(){
    parent::__construct();
    // $this->db = $this->load->database("test_db",true);
  }

	function action($params){

		$query= $this->db ->select("first_name,last_name,id,email,is_active,password")
											->from("users")
											->where("email",$params["email"])
											->where("deleted_at",null)
											->get();
		$user = $query->row_array();
// var_dump($user);die;
		if (!$query->num_rows()) {
      return rest_response(
        Status_codes::HTTP_CONFLICT,
        "User not found"
      );
    }

// var_dump(password_verify("123456","123456"));
    if (!password_verify($params["password"],$user["password"])) {
// var_dump([$params["password"],$user["password"]]); die;
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
