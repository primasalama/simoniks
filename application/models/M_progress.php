<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_progress extends CI_Model {
	public function getAll()
	{
		$sql = "SELECT progress.*,user.role,user.name from progress inner join user on user.no = progress.created_by ";
		return $this->db->query($sql)->result();
	}
	public function getAllExcel()
	{
		$sql = "SELECT progress.*,user.role,user.name from progress inner join user on user.no = progress.created_by ";
		return $this->db->query($sql);
	}
	public function insert($data)
	{
		$this->db->insert('progress',$data);
	}

	public function deleteId($value='')
	{
		$this->db->where('no',$value);
		$this->db->delete('progress');
	}
	public function updateId($data,$value)
	{
		$this->db->where('no',$value);
		$this->db->update('progress',$data);
	}
	public function getId($value='')
	{
		$this->db->where('no',$value);
		return $this->db->get('progress')->result();
	}
	public function getByAsdep($value='')
	{
		$sql = "SELECT progress.*,user.role from progress inner join user on user.no = progress.created_by where user.role = '".$value."' ";
		return $this->db->query($sql)->result();
	}
}