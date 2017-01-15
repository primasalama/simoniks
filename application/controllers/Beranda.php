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
		$this->load->library('excel');
	}
	public function index()
	{
		$result['kebijakan'] = $this->M_kebijakan->getAll();
		$result['agenda'] = $this->M_agenda->getAll();
		$result['progress'] = $this->M_progress->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/beranda',$result);
		$this->load->view('frontend/footerf');
	}
	public function kebijakan($value='',$mode='')
	{
		if ($value == '') {
			$this->load->view('frontend/kebijakan');
		}else{
			if ($this->session->userdata('session') and $this->session->userdata('session')[0]->role != 'admin') {
				if ($this->uri->segment(2) == $this->session->userdata('session')[0]->role) {
					$result['data'] = $this->M_kebijakan->getByAsdep($value);
					$this->load->view('frontend/header');
					$this->load->view('frontend/list',$result);
					$this->load->view('frontend/footer');
				}else{
					$data = array('url' => 'kebijakan','value'=>$value);
					$this->session->set_userdata('url',$data);
					redirect('auth/logout');
				}
			}else{
				$data = array('url' => 'kebijakan','value'=>$value);
				$this->session->set_userdata('url',$data);
				redirect('Login');
			}
		}
	}

	public function progress($value='')
	{
		if ($value == '') {
			$this->load->view('frontend/progress');
		}else{
			if ($this->session->userdata('session') and $this->session->userdata('session')[0]->role != 'admin') {
				if ($this->uri->segment(2) == $this->session->userdata('session')[0]->role) {
					$result['data'] = $this->M_progress->getByAsdep($value);
					$this->load->view('frontend/header');
					$this->load->view('frontend/list_progress',$result);
					$this->load->view('frontend/footer');
				}else{
					$data = array('url' => 'progress','value'=>$value);
					$this->session->set_userdata('url',$data);
					redirect('auth/logout');
				}
			}else{
				$data = array('url' => 'progress','value'=>$value);
				$this->session->set_userdata('url',$data);
				redirect('Login');
			}
		}
	}

	public function agenda($value='')
	{
		if ($value == '') {
			$this->load->view('frontend/agenda');
		}else{
			if ($this->session->userdata('session') and $this->session->userdata('session')[0]->role != 'admin') {
				if ($this->uri->segment(2) == $this->session->userdata('session')[0]->role) {
					$result['data'] = $this->M_agenda->getByAsdep($value);
					$this->load->view('frontend/header');
					$this->load->view('frontend/list_agenda',$result);
					$this->load->view('frontend/footer');
				}else{
					$data = array('url' => 'progress','value'=>$value);
					$this->session->set_userdata('url',$data);
					redirect('auth/logout');
				}
			}else{
				$data = array('url' => 'progress','value'=>$value);
				$this->session->set_userdata('url',$data);
				redirect('Login');
			}
		}
	}
	public function md5($val)
	{
		echo md5($val);
	}
	public function coba($value='')
	{
		//activate worksheet number 1
		$this->excel->setActiveSheetIndex(0);
		//name the worksheet
		$this->excel->getActiveSheet()->setTitle('test worksheet');
		//set cell A1 content with some text
		$this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
		//change the font size
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
		//make the font become bold
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		//merge cell A1 until D1
		$this->excel->getActiveSheet()->mergeCells('A1:D1');
		//set aligment to center for that merged cell (A1 to D1)
		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$filename='just_some_random_name.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		            
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
}
