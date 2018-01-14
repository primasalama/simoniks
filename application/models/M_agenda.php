<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

	public function getAll()
	{
		$sql = "SELECT agenda.*,user.role,user.name,kebijakan.narasi from agenda inner join user on user.no = agenda.created_by inner join kebijakan on kebijakan.no = agenda.narasiKebijakan ";
		return $this->db->query($sql)->result();
	}
	public function getAllExcel($value)
	{
		if ($value == null) {
			$sql = "SELECT agenda.*,user.role,user.name,kebijakan.narasi from agenda inner join user on user.no = agenda.created_by inner join kebijakan on kebijakan.no = agenda.narasiKebijakan";	# code...
		}else{
			$sql = "SELECT agenda.*,user.role,user.name,kebijakan.narasi from agenda inner join user on user.no = agenda.created_by inner join kebijakan on kebijakan.no = agenda.narasiKebijakan where user.role = '".$value."' ";
		}
		return $this->db->query($sql);
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
		$sql = "SELECT agenda.*,user.role,user.name,kebijakan.narasi from agenda inner join user on user.no = agenda.created_by inner join kebijakan on kebijakan.no = agenda.narasiKebijakan where agenda.no = '".$value."' ";
		return $this->db->query($sql)->result();
	}
	public function getByAsdep($value='')
	{
		$sql = "SELECT agenda.*,user.role,user.name,kebijakan.narasi from agenda inner join user on user.no = agenda.created_by inner join kebijakan on kebijakan.no = agenda.narasiKebijakan where user.role = '".$value."' ";
		return $this->db->query($sql)->result();
	}
} 	