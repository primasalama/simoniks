<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kebijakan extends CI_Model {
	public function getAll()
	{
		return $this->db->get('kebijakan')->result();
	}

	public function insert($data)
	{
		$this->db->insert('kebijakan',$data);
	}
}