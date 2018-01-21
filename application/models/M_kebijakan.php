<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kebijakan extends CI_Model {
	var $table = 'kebijakan';
    var $column_order = array(null, 'no','narasi','status','indikator','pic'); //set column field database for datatable orderable
    var $column_search = array('no','narasi','status','indikator','pic'); //set column field database for datatable searchable 
    var $order = array('no' => 'asc'); // default order 
 
	public function getAll()
	{
		$sql = "SELECT kebijakan.*,user.role,user.name from kebijakan inner join user on user.no = kebijakan.created_by WHERE kebijakan.tahun = ".date('Y')." ORDER BY role asc  ";
		return $this->db->query($sql)->result();
	}
	public function getAllDetail($value='')
	{
		$this->db->join('progress', 'progress.narasiKebijakan = kebijakan.no', 'inner');
		return $this->db->get('kebijakan')->result();
	}
	public function getAllExcel($value)
	{
		if ($value == null) {
			$sql = "SELECT kebijakan.*,user.role,user.name from kebijakan inner join user on user.no = kebijakan.created_by ";	# code...
		}else{
			$sql = "SELECT kebijakan.*,user.role,user.name from kebijakan inner join user on user.no = kebijakan.created_by where user.role = '".$value."' ";
		}
		return $this->db->query($sql);
	}

	public function insert($data)
	{
		$this->db->insert('kebijakan',$data);
	}

	public function deleteId($value='')
	{
		$this->db->where('no',$value);
		$this->db->delete('kebijakan');
	}
	public function updateId($data,$value)
	{
		$this->db->where('no',$value);
		$this->db->update('kebijakan',$data);
	}
	public function getId($value='')
	{
		$sql = "SELECT kebijakan.*,user.role,user.name from kebijakan inner join user on user.no = kebijakan.created_by where kebijakan.no = '".$value."' ";
		return $this->db->query($sql)->result();
	}
	public function getByAsdep($value='')
	{
		$sql = "SELECT kebijakan.*,user.role from kebijakan inner join user on user.no = kebijakan.created_by where user.role = '".$value."' AND kebijakan.tahun = ".date('Y')." ";
		return $this->db->query($sql)->result();
	}
	// Datatable
	private function _get_datatables_query()
	    {
	         
	        $this->db->from($this->table);
	 
	        $i = 0;
	     
	        foreach ($this->column_search as $item) // loop column 
	        {
	            if($_POST['search']['value']) // if datatable send POST for search
	            {
	                 
	                if($i===0) // first loop
	                {
	                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
	                    $this->db->like($item, $_POST['search']['value']);
	                }
	                else
	                {
	                    $this->db->or_like($item, $_POST['search']['value']);
	                }
	 
	                if(count($this->column_search) - 1 == $i) //last loop
	                    $this->db->group_end(); //close bracket
	            }
	            $i++;
	        }
	         
	        if(isset($_POST['order'])) // here order processing
	        {
	            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	        } 
	        else if(isset($this->order))
	        {
	            $order = $this->order;
	            $this->db->order_by(key($order), $order[key($order)]);
	        }
	    }
	 
	    function get_datatables()
	    {
	        $this->_get_datatables_query();
	        if($_POST['length'] != -1)
	        $this->db->limit($_POST['length'], $_POST['start']);
	        $query = $this->db->get();
	        return $query->result();
	    }
	 
	    function count_filtered()
	    {
	        $this->_get_datatables_query();
	        $query = $this->db->get();
	        return $query->num_rows();
	    }
	 
	    public function count_all()
	    {
	        $this->db->from($this->table);
	        return $this->db->count_all_results();
	    }
	//---- datatable


}