<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		Auth::check(true);
	}

  public function index(){
    $this->view([
			"layouts/header",
			"user/settings"
    ],[
      "title" => "Settings"
    ]);
		function changePass(){

		}
  }
	function changepass(){
		$data =[
			
		]

	}
}
