<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

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
	}
	public function index()
	{
		$result['data'] = $this->M_progress->getAll();
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/list_progress',$result);
		$this->load->view('backend/footer');
	}
	public function tambah()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/add_progress');
		$this->load->view('backend/footer');
	}
	public function add()
	{
		$dokumentasi1 =  $this->uploadImage($_FILES['foto1'],'foto1');
		$dokumentasi2 =  $this->uploadImage($_FILES['foto2'],'foto2');
		$data = array('kegiatan' => $this->input->post('kegiatan'),'tanggal'=>substr($this->input->post('tanggal'), 6,4)."-".substr($this->input->post('tanggal'), 0,2)."-".substr($this->input->post('tanggal'), 3,2),'pukul'=>$this->input->post('pukul'),'tempat'=>$this->input->post('tempat'),'unit'=>$this->input->post('unit'),'created_by'=>1);
		$this->M_progress->insert($data);
		redirect('Progress');
	}
	public function uploadImage($image,$name)
	{
		if ($image) {
			$file_name = 'file_'.time();
			$config['upload_path']   = './assets/images/uploads/'; 
	        $config['allowed_types'] = 'jpg|png|JPG|PNG|JPEG|jpeg'; 
	        $config['max_size']      = 10240; 
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
		$data = array('kegiatan' => $this->input->post('kegiatan'),'tanggal'=>substr($this->input->post('tanggal'), 6,4)."-".substr($this->input->post('tanggal'), 0,2)."-".substr($this->input->post('tanggal'), 3,2),'pukul'=>$this->input->post('pukul'),'tempat'=>$this->input->post('tempat'),'unit'=>$this->input->post('unit'),'created_by'=>1);
		$this->M_progress->updateId($data,$value);
		redirect('Progress');
	}
	public function delete($value)
	{
		$this->M_progress->deleteId($value);
		redirect('Progress');
	}
	public function edit($value)
	{
		$result['data'] = $this->M_progress->getId($value);
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/edit_progress',$result);
		$this->load->view('backend/footer');
	}
}
