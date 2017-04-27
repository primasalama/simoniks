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
	public function getProgressKebijakan($value='')
	{
		$sql = "SELECT narasiKebijakan, narasi,tanggal1,tanggal2,lokasi,uraian,tindak_ljt,masalah,arahan FROM `progress` INNER JOIN `kebijakan` on kebijakan.no = progress.narasiKebijakan ORDER BY narasiKebijakan";
		return $this->db->query($sql);
	}
	public function getProgressKebijakan_id($value='')
	{
		$sql = "SELECT narasiKebijakan, narasi,tanggal1,lokasi,tanggal2,uraian,tindak_ljt,masalah,arahan FROM `progress` INNER JOIN `kebijakan` on kebijakan.no = progress.narasiKebijakan WHERE progress.narasiKebijakan = '".$value."' ORDER BY narasiKebijakan ";
		return $this->db->query($sql);
	}
	public function getTindakMasalah($value='')
	{
		$limit = 1;
		$offset = 0;
		$this->db->where('narasiKebijakan',$value);
		$this->db->order_by('tanggal2', 'desc');
		return $this->db->get('progress', $limit, $offset);
		# code...
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