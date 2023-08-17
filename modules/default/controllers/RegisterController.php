<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class RegisterController extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function add() {
		$this->view("register");
	}

	public function action() {
		$data = [
			"first_name"	=> $this->input->post("first_name"),
			"last_name"	=> $this->input->post("last_name"),
			"email"		=> $this->input->post("email"),
      "password" => password_hash($this->input->post("password"),PASSWORD_BCRYPT)

		];
    $this->load->model("Register_model","model");
		$result = $this->model->add($data);
		if($result) {
      Flash::set("message","New user is registered successfully.");
      Flash::set("type","success");
      redirect(base_url("auth/profile"));
		} else {
      Flash::set("message","Something went wrong.");
      Flash::set("type","danger");
      redirect(base_url("auth/register"));
		}
	}
}
