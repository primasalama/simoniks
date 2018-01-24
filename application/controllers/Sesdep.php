<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesdep extends CI_Controller {

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
		$this->load->model('M_agenda');
		if (empty($this->session->userdata('session'))) {
			redirect('login');
		}
	}
	public function index($value='')
	{
		//Load view
		$result['data'] = $this->M_agenda->getByAsdep('sesdep');
		//print_r($result['data']);die();
		$this->load->view('frontend/header');
		$this->load->view('frontend/list_agenda',$result);
		$this->load->view('frontend/footerf');
	}
	public function edit($value='')
	{
		$result['data'] = $this->M_agenda->getId($value);
		$this->load->view('frontend/header');
		$this->load->view('frontend/edit_sesdep',$result);
		$this->load->view('frontend/footerf');
	}
	public function update($value='')
	{
		$data = array('tglPencairan'=>substr($this->input->post('tglPencairan'), 6,4)."-".substr($this->input->post('tglPencairan'), 0,2)."-".substr($this->input->post('tglPencairan'), 3,2),'tglSpd'=>substr($this->input->post('tglSpd'), 6,4)."-".substr($this->input->post('tglSpd'), 0,2)."-".substr($this->input->post('tglSpd'), 3,2),'tglPengajuanSpd'=>substr($this->input->post('tglPengajuanSpd'), 6,4)."-".substr($this->input->post('tglPengajuanSpd'), 0,2)."-".substr($this->input->post('tglPengajuanSpd'), 3,2));
		//print_r($data);die();
		$this->M_agenda->updateId($data,$value);
		redirect('agenda');
	}

}