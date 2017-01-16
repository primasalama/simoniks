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
		$data = array('narasi' => $this->input->post('narasi'),'status'=>$this->input->post('status'),'indikator'=>$this->input->post('indikator'),'pic'=>$this->input->post('pic'),'created_by'=>$this->session->userdata('session')[0]->no,'updated_by'=>$this->session->userdata('session')[0]->no);
		$this->M_kebijakan->insert($data);
		redirect('Kebijakan');
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
		redirect('Kebijakan');
	}
	public function delete($value)
	{
		$this->M_kebijakan->deleteId($value);
		redirect('Kebijakan');
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
