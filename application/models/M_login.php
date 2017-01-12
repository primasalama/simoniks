<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function getId($user,$pass)
	{
		//print_r($pass);
		$this->db->where('name',$user);
		$this->db->where('password',$pass);
		return $this->db->get('user')->result();
	}
}