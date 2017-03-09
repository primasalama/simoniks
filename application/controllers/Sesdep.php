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
	}

}