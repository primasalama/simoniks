<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
		$this->load->model('M_agenda');
		$this->load->model('M_kebijakan');
		$this->load->model('M_progress');
	}
	public function index()
	{
		$result['kebijakan'] = $this->M_kebijakan->getAll();
		$result['agenda'] = $this->M_agenda->getAll();
		$result['progress'] = $this->M_progress->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/beranda',$result);
		$this->load->view('frontend/footer');
	}
	public function kebijakan($value='')
	{
		$this->load->view('frontend/kebijakan');
		/*$result['data'] = $this->M_kebijakan->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/list',$result);
		$this->load->view('frontend/footer');*/
	}

	public function progress($value='')
	{
		$this->load->view('frontend/progress');
		/*$result['data'] = $this->M_kebijakan->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/list',$result);
		$this->load->view('frontend/footer');*/
	}

	public function agenda($value='')
	{
		$this->load->view('frontend/agenda');
		/*$result['data'] = $this->M_kebijakan->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/list',$result);
		$this->load->view('frontend/footer');*/
	}
	public function md5($val)
	{
		echo md5($val);
	}
	public function coba($value='')
	{
		echo "fungsi coba";
		echo "<br/>".$this->uri->Segment(3);
	}
}
