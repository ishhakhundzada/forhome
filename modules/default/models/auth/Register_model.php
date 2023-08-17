<?php

class Register_model extends CI_Model {
	/*Insert*/
	function add($data) {
		return $this->db->insert("users", $data);
	}


}
