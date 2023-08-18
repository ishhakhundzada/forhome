<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
{
	public function __construct() {
		parent::__construct();
	}

  public function index(){
		$params = [
			"id" => $this->session->userdata("id")
		];
		$this->load->model("Profile_model","model");
		$results=$this->model->readdata($params);
		$this->view([
			"profile"

		],[
			"title" => "Porfile",
			'row'=>$results["data"]
		]);
  }
}
