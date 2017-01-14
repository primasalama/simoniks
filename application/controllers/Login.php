<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	}
	public function index($value='')
	{
		if ($value == 'failed') {
			$result['data'] = '<div class="alert alert-danger">Login dibatalkan. Kombinasi <b>Username</b> <b>Password</b> Salah</div>';
		}else{
			$result['data'] = null;
		}
		$this->load->view('backend/header');
		$this->load->view('backend/login',$result);
		$this->load->view('backend/footer');
	}
}
