<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebijakan extends CI_Controller {

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
		$this->load->model('M_kebijakan');
		if (empty($this->session->userdata('session'))) {
			redirect('login');
		}
	}
	public function index()
	{
		$result['data'] = $this->M_kebijakan->getAll();
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/list_kebijakan',$result);
		$this->load->view('backend/footer');
	}
	public function tambah()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/add_kebijakan');
		$this->load->view('backend/footer');
	}
	public function add()
	{
		//print_r(nl2br($this->input->post('narasi')));die();
		switch ($this->input->post('deputi')) {
			case 'asdep1':
				$created_by = 2;
				$url_back ='asdep1';
				break;
			case 'asdep2':
				$created_by = 3;
				$url_back ='asdep2';
				break;
			case 'asdep3':
				$created_by = 4;
				$url_back ='asdep3';
				break;
			case 'asdep4':
				$created_by = 5;
				$url_back ='asdep4';
				break;
			default:
				# code...
				break;
		}
		$data = array('narasi' => $this->input->post('narasi'),'status'=>$this->input->post('status'),'indikator'=>$this->input->post('indikator'),'pic'=>$this->input->post('pic'),'created_by'=>$created_by,'updated_by'=>$this->session->userdata('session')[0]->no,'tahun'=>date("Y"));
		// print_r($data);die();
		$this->M_kebijakan->insert($data);
		redirect('Beranda/view/'.$url_back);
	}
	public function config()
	{
		$result['data'] = $this->M_kebijakan->getAll();
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/list_kebijakan',$result);
		$this->load->view('backend/footer');
	}
	public function update($value)
	{
		$data = array('narasi' => $this->input->post('narasi'),'status'=>$this->input->post('status'),'indikator'=>$this->input->post('indikator'),'pic'=>$this->input->post('pic'),'updated_by'=>$this->session->userdata('session')[0]->no,'updated_at'=>date("Y-m-d H:i:s"));
		$this->M_kebijakan->updateId($data,$value);
		$data = $this->M_kebijakan->getId($value);
		redirect('Beranda/view/'.$data[0]->role);
	}
	public function delete($value)
	{
		//echo $value;die();
		$data = $this->M_kebijakan->getId($value);
		//echo 'Beranda/view/'.$data[0]->role;die();
		$this->M_kebijakan->deleteId($value);
		//print_r($data[0]->role);die();
		redirect('Beranda/view/'.$data[0]->role);
	}
	public function edit($value)
	{
		$result['data'] = $this->M_kebijakan->getId($value);
		$this->load->view('backend/header');
		$this->load->view('backend/navbar');
		$this->load->view('backend/sidenav');
		$this->load->view('backend/edit_kebijakan',$result);
		$this->load->view('backend/footer');
	}
}
