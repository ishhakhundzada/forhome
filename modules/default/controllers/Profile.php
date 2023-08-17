<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
{
	public function __construct() {
		parent::__construct();
	}

  public function index(){
    $this->view([
      "auth/profile"
    ],[
      "title" => "Porfile"
    ]);
  }
}
