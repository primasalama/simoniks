<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

	public function getAll()
	{
		return $this->db->get('agenda')->result();
	}

	public function insert($data)
	{
		$this->db->insert('agenda',$data);
	}

	public function deleteId($value='')
	{
		$this->db->where('no',$value);
		$this->db->delete('agenda');
	}
	public function updateId($data,$value)
	{
		$this->db->where('no',$value);
		$this->db->update('agenda',$data);
	}
	public function getId($value='')
	{
		$this->db->where('no',$value);
		return $this->db->get('agenda')->result();
	}
} 	