<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fprogress extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('M_progress');
		$this->load->model('M_kebijakan');
		if (empty($this->session->userdata('session'))) {
			redirect('login');
		}
	}
	public function index($asdep)
	{
		$result['kegiatan_enum'] = $this->M_progress->get_enum('progress','kegiatan');
		$result['subkomponen_enum'] = $this->M_progress->get_enum('progress','sub_komponen');
		// print_r($result['s']);die();
		$result['data'] = $this->M_kebijakan->getByAsdep($asdep);
		$this->load->view('frontend/header');
		$this->load->view('frontend/add_progress',$result);
		$this->load->view('frontend/footerf');
	}

	public function add()
	{	
		$tanggal1 = substr($this->input->post('tanggal1'), 6,4)."-".substr($this->input->post('tanggal1'), 0,2)."-".substr($this->input->post('tanggal1'), 3,2);
		if (empty($this->input->post('tanggal2')) || empty($this->input->post('jam2'))) {
			$tanggal2 = substr($this->input->post('tanggal1'), 6,4)."-".substr($this->input->post('tanggal1'), 0,2)."-".substr($this->input->post('tanggal1'), 3,2);
		}else{
			$tanggal2 = substr($this->input->post('tanggal2'), 6,4)."-".substr($this->input->post('tanggal2'), 0,2)."-".substr($this->input->post('tanggal2'), 3,2);
		}
		$dokumentasi1 =  $this->uploadImage($_FILES['foto1'],'foto1');
		$dokumentasi2 =  $this->uploadImage($_FILES['foto2'],'foto2');
		$data = array('narasiKebijakan'=>$this->input->post('narasiKebijakan'),'uraian'=>$this->input->post('uraian'),'arahan'=>$this->input->post('arahan'),
			'tanggal1'=>$tanggal1,'tanggal2'=>$tanggal2,'lokasi'=>$this->input->post('lokasi'),'hasil'=>$this->input->post('hasil'),'tindak_ljt'=>$this->input->post('tindak_ljt'),
			'masalah'=>$this->input->post('masalah'),'dokumentasi1'=>$dokumentasi1,'dokumentasi2'=>$dokumentasi2,'kegiatan'=>$this->input->post('kegiatan'),'sub_komponen'=>$this->input->post('sub_komponen'),
			'created_by'=>$this->session->userdata('session')[0]->no,'updated_by'=>$this->session->userdata('session')[0]->no);
		//print_r($data);die();
		$this->M_progress->insert($data);
		redirect('Beranda/view/'.$this->session->userdata('session')[0]->role);
	}
	public function uploadImage($image,$name)
	{
		if ($image) {
			$file_name = 'file_'.time();
			$config['upload_path']   = './assets/images/uploads/'; 
	        $config['allowed_types'] = 'jpg|png|JPG|PNG|JPEG|jpeg'; 
	        $config['max_size']      = 0;//no limit 
	        $config['max_width']     = 5120; 
	        $config['max_height']    = 3840;  
	        $config['file_name'] = $file_name;
	        $this->upload->initialize($config);
         	if ($this->upload->do_upload($name))
            {
            	$img = $this->upload->data();
            	return $img['file_name'];
            }else{
            	echo $this->upload->display_errors('<p>', '</p>');
            }
            //redirect('Foto');
         }
		
	}
	public function config()
	{
		$result['data'] = $this->M_progress->getAll();
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/list_progress',$result);
		$this->load->view('backend/footer');
	}
	public function update($value)
	{
		$result = $this->M_progress->getId($value);
		$doc1 = $_FILES['foto1'];
		$doc2 = $_FILES['foto2'];
		$tanggal1 = substr($this->input->post('tanggal1'), 6,4)."-".substr($this->input->post('tanggal1'), 0,2)."-".substr($this->input->post('tanggal1'), 3,2);
		if (empty($this->input->post('tanggal2')) || empty($this->input->post('jam2'))) {
			$tanggal2 = substr($this->input->post('tanggal1'), 6,4)."-".substr($this->input->post('tanggal1'), 0,2)."-".substr($this->input->post('tanggal1'), 3,2);
		}else{
			$tanggal2 = substr($this->input->post('tanggal2'), 6,4)."-".substr($this->input->post('tanggal2'), 0,2)."-".substr($this->input->post('tanggal2'), 3,2);
		}
		if ($doc1['size'] != 0) {
			$dokumentasi1 = $this->uploadImage($_FILES['foto1'],'foto1');
		}else{
			$dokumentasi1 = $result[0]->dokumentasi1;
		}
		if ($doc2['size'] != 0) {
			$dokumentasi2 = $this->uploadImage($_FILES['foto2'],'foto2');
		}else{
			$dokumentasi2 = $result[0]->dokumentasi2;
		}
		$data = array('narasiKebijakan'=>$this->input->post('narasiKebijakan'),'uraian'=>$this->input->post('uraian'),'arahan'=>$this->input->post('arahan'),
			'tanggal1'=>$tanggal1,'tanggal2'=>$tanggal2,'lokasi'=>$this->input->post('lokasi'),'hasil'=>$this->input->post('hasil'),
			'tindak_ljt'=>$this->input->post('tindak_ljt'),'masalah'=>$this->input->post('masalah'),'kegiatan'=>$this->input->post('kegiatan'),'sub_komponen'=>$this->input->post('sub_komponen'),
			'dokumentasi1'=>$dokumentasi1,'dokumentasi2'=>$dokumentasi2,'updated_by'=>$this->session->userdata('session')[0]->no,
			'updated_at'=>date("Y-m-d H:i:s"));
		$this->M_progress->updateId($data,$value);
		redirect('Beranda/view/'.$this->session->userdata('session')[0]->role);
	}
	public function delete($value,$role)
	{
		$this->M_progress->deleteId($value);
		redirect('Beranda/view/'.$role);
	}
	public function edit($value,$asdep)
	{
		$result['data1'] = $this->M_kebijakan->getByAsdep($asdep);
		$result['data'] = $this->M_progress->getId($value);
		$result['kegiatan_enum'] = $this->M_progress->get_enum('progress','kegiatan');
		$result['subkomponen_enum'] = $this->M_progress->get_enum('progress','sub_komponen');
		// print_r($result['s']);die();
		$this->load->view('frontend/header');
		$this->load->view('frontend/edit_progress',$result);
		$this->load->view('frontend/footerf');
	}
	public function word($value,$asdep)
	{
		$result['data1'] = $this->M_kebijakan->getByAsdep($asdep);
		$result['data'] = $this->M_progress->getId($value);
		// print_r($result);die();
		$this->load->view('frontend/word_progress',$result);
		// $this->load->view('frontend/footerf');
	}
	public function word_advance()
	{
		// echo $this->input->post('export_kebijakan');die();
		if ($this->input->post('opsi') == 1) {
			$result['data'] = $this->M_progress->getData_narasi($this->input->post('export_kebijakan'));
			
		}else{
			$result['data'] = $this->M_progress->getData_narasi_date($this->input->post('export_tanggal1'),$this->input->post('export_tanggal2'));
		}
		if (count($result['data']) > 0) {
			$res = array('status' => 1,'data' => $result['data']);
			// $this->export_advance($result['data']);
			// redirect('Fprogress/export_advance/'.implode(', ', $result['data'])."/" ,'refresh');
		}else{
			$res = array('status' => 0,'data'=> $result['data']);

		}
		echo json_encode($res);
		// $this->load->view('frontend/loop_word_progress',$result);
		// $this->load->view('frontend/word_progress',$result);
		// $this->load->view('frontend/footerf');
	}
	public function export_advance($opsi,$v1='',$v2='')
	{
		// echo $v1;die();
		if ($opsi == 1) {
			$result['data'] = $this->M_progress->getData_narasi($v1);
			
		}else{
			$result['data'] = $this->M_progress->getData_narasi_date($v1,$v2);
		}
		// echo json_encode($result['data']);die();
		// print_r($result['data']);
		// $this->load->view('frontend/loop_word_progress',$result);
		// $this->load->view('frontend/word_progress',$result);
		// $this->load->view('frontend/footerf');
		$this->load->view('frontend/loop_word_progress',$result);
	}
}
