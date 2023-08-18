<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller
{
	public function __construct() {
		parent::__construct();
	}

  public function index(){
    $this->view([
			"layouts/header",
			"about"
    ],[
      "title" => "About"
    ]);
  }
}
