<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_progress extends CI_Model {
	public function getAll()
	{
		$sql = "SELECT progress.*,user.role,user.name,kebijakan.narasi from progress inner join user on user.no = progress.created_by inner join kebijakan on kebijakan.no = progress.narasiKebijakan ";
		return $this->db->query($sql)->result();
	}
	public function getAllExcel($value)
	{
		if ($value == null) {
			$sql = "SELECT progress.*,user.role,user.name,kebijakan.narasi from progress inner join user on user.no = progress.created_by inner join kebijakan on kebijakan.no = progress.narasiKebijakan";	# code...
		}else{
			$sql = "SELECT progress.*,user.role,user.name,kebijakan.narasi from progress inner join user on user.no = progress.created_by inner join kebijakan on kebijakan.no = progress.narasiKebijakan where user.role = '".$value."' ";
		}
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
		$sql = "SELECT progress.*,user.role,user.name,kebijakan.narasi from progress inner join user on user.no = progress.created_by inner join kebijakan on kebijakan.no = progress.narasiKebijakan where progress.no = '".$value."' ";
		return $this->db->query($sql)->result();
	}
	public function getByAsdep($value='')
	{
		$sql = "SELECT progress.*,user.role,user.name,kebijakan.narasi  from progress inner join user on user.no = progress.created_by inner join kebijakan on kebijakan.no = progress.narasiKebijakan where user.role = '".$value."' ";
		return $this->db->query($sql)->result();
	}
}