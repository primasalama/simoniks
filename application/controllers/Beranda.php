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
	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/beranda');
		$this->load->view('frontend/footer');
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
