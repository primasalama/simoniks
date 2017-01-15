<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->model('M_login');
	}
	public function index()
	{
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$result = $this->M_login->getId($user,$pass);
		if (empty($result)) {
			redirect('login/failed');
		}else{
			$this->session->Set_userdata('session',$result);
			if ($this->session->userdata('session')[0]->role != 'admin') {
				//print_r($this->session->userdata('url'));die();
				redirect($this->session->userdata('url')['url']."/".$this->session->userdata('url')['value']);
			}else{
				redirect('dashboard');
			}
		}
	}
	public function logout($value='')
	{
		$this->session->unset_userdata('session');
		redirect('login');
	}
}
