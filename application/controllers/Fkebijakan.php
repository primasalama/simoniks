<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fkebijakan extends CI_Controller {

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
		$this->load->view('frontend/header');
		$this->load->view('frontend/add_kebijakan');
		$this->load->view('frontend/footerf');
	}
	public function kabid($value='',$id='')
	{
		if ($value == 'insert') {
				$data['kabid'] = $this->input->post('kabid');
				$data['label_kabid'] = $this->input->post('label_kabid');
				$data['nip_kabid'] = $this->input->post('nip_kabid');
				$data['asdep'] = $this->input->post('asdep');
			if ($this->input->post('id_kabid') == '') {
				$this->M_kebijakan->add_kabid($data);
				redirect('Fkebijakan/kabid','refresh');
			}else{
				$this->M_kebijakan->update_kabid($this->input->post('id_kabid'),$data);
				redirect('Fkebijakan/kabid','refresh');
			}
		}elseif ($value == 'delete') {
			$this->M_kebijakan->delete_kabid($id);
			redirect('Fkebijakan/kabid','refresh');
		}
		else{
			$result['data_kabid'] = $this->M_kebijakan->get_kabid_all();
			$this->load->view('frontend/header');
			$this->load->view('frontend/add_kabid',$result);
			$this->load->view('frontend/footerf');
		}
	}
	public function add()
	{
		if ($this->input->post('nip_kabid') != NULL) {
			# code...
			$kabid = $this->input->post('nip_kabid');
		}else{$kabid = '';}
		$data = array('narasi' => $this->input->post('narasi'),'status'=>$this->input->post('status'),'indikator'=>$this->input->post('indikator'),'pic'=>$this->input->post('pic'),'kabid'=>$this->input->post('kabid'),'nip_kabid'=>$kabid,'created_by'=>$this->session->userdata('session')[0]->no,'updated_by'=>$this->session->userdata('session')[0]->no);
		$this->M_kebijakan->insert($data);
		redirect('Beranda/view/'.$this->session->userdata('session')[0]->role);
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
		if ($this->input->post('nip_kabid') != NULL) {
			# code...
			$kabid = $this->input->post('nip_kabid');
		}else{$kabid = '';}
		$data = array('narasi' => $this->input->post('narasi'),'status'=>$this->input->post('status'),'indikator'=>$this->input->post('indikator'),'pic'=>$this->input->post('pic'),'updated_by'=>$this->session->userdata('session')[0]->no,'updated_at'=>date("Y-m-d H:i:s"),'kabid'=>$this->input->post('kabid'),'nip_kabid'=>$kabid);
		$this->M_kebijakan->updateId($data,$value);
		redirect('kebijakan/'.$this->session->userdata('session')[0]->role);
	}
	public function delete($value)
	{
		$this->M_kebijakan->deleteId($value);
		redirect('kebijakan/'.$this->session->userdata('session')[0]->role);
	}
	public function edit($value)
	{
		$result['data'] = $this->M_kebijakan->getId($value);
		$this->load->view('frontend/header');
		$this->load->view('frontend/edit_kebijakan',$result);
		$this->load->view('frontend/footerf');
	}
}
