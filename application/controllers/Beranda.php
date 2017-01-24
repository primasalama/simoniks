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
	
	public function view($value='')
	{
		if ($value != '') {
			if ($this->session->userdata('session')) {
				if ($this->session->userdata('session')[0]->role == $value OR $this->session->userdata('session')[0]->role == 'admin'){
					$result['kebijakan'] = $this->M_kebijakan->getByAsdep($value);
					$result['progress'] = $this->M_progress->getByAsdep($value);
					$this->load->view('frontend/header');
					$this->load->view('frontend/list',$result);
					$this->load->view('frontend/footerf');
				}else{
					//echo "string";die();
					$data = array('url' => 'view','value'=>$value);// nyimpen ke array, url kemana diakan balik setelah login nanti.
					$this->session->set_userdata('url',$data);
					redirect('Auth/logout');
				}
			}else{
				$data = array('url' => 'view','value'=>$value);// nyimpen ke array, url kemana diakan balik setelah login nanti.
				$this->session->set_userdata('url',$data);
				redirect('Auth/logout');
			}
		}else{
			redirect('Beranda');
		}
	}

	public function agenda($value='')
	{
		
		if ($value != '') {
			if ($this->session->userdata('session')) {
				if ($this->session->userdata('session')[0]->role == $value OR $this->session->userdata('session')[0]->role == 'admin'){
					$result['data'] = $this->M_agenda->getByAsdep($value);
					$this->load->view('frontend/header');
					$this->load->view('frontend/list_agenda',$result);
					$this->load->view('frontend/footerf');
				}else{
					$data = array('url' => 'agenda','value'=>$value);// nyimpen ke array, url kemana diakan balik setelah login nanti.
					$this->session->set_userdata('url',$data);
					redirect('Auth/logout');
				}
			}else{
				$data = array('url' => 'agenda','value'=>$value);// nyimpen ke array, url kemana diakan balik setelah login nanti.
				$this->session->set_userdata('url',$data);
				redirect('Auth/logout');
			}
		}else{
			$result['data'] = $this->M_agenda->getAll();
		$this->load->view('frontend/header');
		$this->load->view('frontend/list_agenda',$result);
		$this->load->view('frontend/footerf');
		}
	}

	public function excels($value='',$deputi=null)
	{
		if ($deputi != null) {
			$result['filename'] = $deputi;
		}else{
			$result['filename'] = null;
		}
		switch ($value) {
			case 'kebijakan':
				$result['data'] = $this->M_kebijakan->getAllExcel($deputi); //Ngambil data dari tabel, disimpen ke $data
				$this->load->view('frontend/e_kebijakan',$result);
				break;
			case 'agenda':
				$result['data'] = $this->M_agenda->getAllExcel($deputi); //Ngambil data dari tabel, disimpen ke $data
				$this->load->view('frontend/e_agenda',$result);
				break;
			case 'progress':
				$result['data'] = $this->M_progress->getAllExcel($deputi); //Ngambil data dari tabel, disimpen ke $data
				$this->load->view('frontend/e_progress',$result);
				break;
			default:
				echo "a";
				break;
		}
	}
	public function md5($val)
	{
		echo md5($val);
	}
	public function excel($value='',$deputi=null)
	{
		//echo "asd";die();
		/* 
		buat akses excel, link: localhost/simoniks/beranda/excel/$value
		Kenapa ada switch ? buat ngecek $value isinya itu kebijakan, agenda, atau progress
		*/
		switch ($value) {
			case 'kebijakan':
				$filename = 'Export_Kebijakan'; //Definisi Nama file
				$data = $this->M_kebijakan->getAllExcel($deputi); //Ngambil data dari tabel, disimpen ke $data
				$this->excel->setActiveSheetIndex(0);//Set SHEET 1 yg ditulis, wajib
				$this->excel->getActiveSheet()->setCellValue('A1','asdsa');
				$this->excel->getActiveSheet()->setTitle($filename); //Nama sheetnya, 1 file excel bisa banyak sheet kan ?
				$heading=array('No','Narasi','Status','Indikator','PIC','Deputi'); //Nyiapin array buat nama kolom, hitung ada berapa kolom.
			    $rowNumberH = 2; 
			    $colH = 'A';
			    foreach($heading as $h){
			    	//Buat nulis nama kolom di arrray tadi ke tiap sel.  Perhatiin $colH = A sama $rowNumber = 1. 
			        $this->excel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h); //ngesetnyagini : setCellValue Buat set nilai si cell,
			        // $colH.$rowNumberH = A.1  jadinya cell A1. isinya $h. berarti array index pertamanya. berarti No. lanjut ke index 2
			        // $colH.$rowNumberH = B.1  jadinya cell B1, gitu tterus sampe di array $headingnya abis
			        $colH++;    
			    }
			    foreach(range('A','E') as $columnID) { //Looping dari kolom A sampe E
				    $this->excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
				    //Intinya ngeset panjang kolom dgn setAutoSize(true) ditiap kolom A sampe E.
				}
			    $totn=$data->num_rows(); //Cek fungsi GetAllExcel di M_Kebijakan, pas direturn itu gak ada result(), beda sama fungsi getAll
			    //Fungsinya $totn = jumlah baris yg diambil dari tabel tersebut
			    $maxrow=$totn+1; 
			    $row = 3; //$ROW Itu = 2. baris awal nulis si isi tabelnya
			    $no = 1;
			    foreach($data->result() as $n){ //Looping Tiap Baris Data
			        $this->excel->getActiveSheet()->setCellValue('A'.$row,$no);
			        //'A'.$row itu setCellValue si A2. cek $row diatas. $no buat numbering tiap barisnya. dari 1 kan ?
			        $this->excel->getActiveSheet()->setCellValue('B'.$row,$n->narasi);
			        //'A'.$row itu setCellValue si A2. cek $row diatas. $no buat numbering tiap barisnya.
			        //$n itu didapet sebagai $data->result() atau hasil tiap barisnya. -> itu nunjuk tiap kolomnya
			        $this->excel->getActiveSheet()->setCellValue('C'.$row,$n->status);
		            $this->excel->getActiveSheet()->setCellValue('D'.$row,$n->indikator);
		            $this->excel->getActiveSheet()->setCellValue('E'.$row,$n->pic);
		             $this->excel->getActiveSheet()->setCellValue('F'.$row,$n->role);
		            $row++; //Next Baris
		            $no++; //Nambahin Nomor 1 per 1
			    }
			    //Freeze pane
			    //$this->excel->getActiveSheet()->freezePane('A4'); //Belom tau wkwkwk
			    //Cell Style
			    $styleArray = array( //definisiin style si excel dengan array
			        'borders' => array(
			            'allborders' => array(
			                'style' => PHPExcel_Style_Border::BORDER_THIN
			            )
			        )
			    );

			    $this->excel->getActiveSheet()->getStyle('A2:F'.$maxrow)->applyFromArray($styleArray); //ngenalin si style yg tadi dibuat ke shet yg active tersebut
				break;
			case 'progress':
			//Sama kayak diatas tadi,bedanya ini buat progress aja
				$filename = 'Export_Progress';
				$data = $this->M_progress->getAllExcel($deputi);
				//activate worksheet number 1
				$this->excel->setActiveSheetIndex(0);
				//name the worksheet
				$this->excel->getActiveSheet()->setTitle($filename);
				//Loop Heading
				$heading=array('No','Kegiatan','Tanggal','Hasil','Tindak Lanjut','Masalah','Deputi');
			    $rowNumberH = 1;
			    $colH = 'A';
			    foreach($heading as $h){
			        $this->excel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
			        $colH++;    
			    }
			    //Loop Result
			    foreach(range('A','E') as $columnID) {
				    $this->excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
				}
			    $totn=$data->num_rows();
			    $maxrow=$totn+1;
			    $row = 2;
			    $no = 1;
			    foreach($data->result() as $n){
			        $this->excel->getActiveSheet()->setCellValue('A'.$row,$no);
			        $this->excel->getActiveSheet()->setCellValue('B'.$row,$n->kegiatan);
			        $this->excel->getActiveSheet()->setCellValue('C'.$row,$n->tanggal);
		            $this->excel->getActiveSheet()->setCellValue('D'.$row,$n->hasil);
		            $this->excel->getActiveSheet()->setCellValue('E'.$row,$n->tindak_ljt);
		            $this->excel->getActiveSheet()->setCellValue('F'.$row,$n->masalah);
		            $this->excel->getActiveSheet()->setCellValue('G'.$row,$n->role);
		            $row++;
		            $no++;
			    }
			    //Freeze pane
			    $this->excel->getActiveSheet()->freezePane('A3');
			    //Cell Style
			    $styleArray = array(
			        'borders' => array(
			            'allborders' => array(
			                'style' => PHPExcel_Style_Border::BORDER_THIN
			            )
			        )
			    );
			    $this->excel->getActiveSheet()->getStyle('A1:G'.$maxrow)->applyFromArray($styleArray);
				break;
			case 'agenda':
				$filename = 'Export_Agenda';
				$data = $this->M_agenda->getAllExcel($deputi);
				//activate worksheet number 1
				$this->excel->setActiveSheetIndex(0);
				//name the worksheet
				$this->excel->getActiveSheet()->setTitle($filename);
				//Loop Heading
				$heading=array('No','Kegiatan','Tanggal','Jam','Tempat','Unit','Deputi');
			    $rowNumberH = 1;
			    $colH = 'A';
			    foreach($heading as $h){
			        $this->excel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
			        $colH++;    
			    }
			    //Loop Result
			    foreach(range('A','E') as $columnID) {
				    $this->excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
				}
			    $totn=$data->num_rows();
			    $maxrow=$totn+1;
			    $row = 2;
			    $no = 1;
			    foreach($data->result() as $n){
			        $this->excel->getActiveSheet()->setCellValue('A'.$row,$no);
			        $this->excel->getActiveSheet()->setCellValue('B'.$row,$n->kegiatan);
			        $this->excel->getActiveSheet()->setCellValue('C'.$row,$n->tanggal);
		            $this->excel->getActiveSheet()->setCellValue('D'.$row,$n->pukul);
		            $this->excel->getActiveSheet()->setCellValue('E'.$row,$n->tempat);
		            $this->excel->getActiveSheet()->setCellValue('F'.$row,$n->unit);
		            $this->excel->getActiveSheet()->setCellValue('G'.$row,$n->role);
		            $row++;
		            $no++;
			    }
			    //Freeze pane
			    $this->excel->getActiveSheet()->freezePane('A3');
			    //Cell Style
			    $styleArray = array(
			        'borders' => array(
			            'allborders' => array(
			                'style' => PHPExcel_Style_Border::BORDER_THIN
			            )
			        )
			    );
			    $this->excel->getActiveSheet()->getStyle('A1:G'.$maxrow)->applyFromArray($styleArray);
				break;
			default:
				# code...
				break;
			}
			header('Content-Type: application/vnd.ms-excel');
		    header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
		    header('Cache-Control: max-age=0');//no cache
			// 3 Baris diatas itu wajib.
			$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');   //Nnetuin tipe excel yg mana
			//force user to download the Excel file without writing it to server's HD
			$objWriter->save('php://output'); //download ke browser
			redirect('Beranda'); // pindah halaman
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
