<?php


class Allgrafik extends CI_Controller {

	
   function __construct()
	{
		parent::__construct();
		$this->load->model('AspekModel', 'aspek');
		$this->load->model('AnswerModel', 'kuskmodel');
		
		$ses = $this->load->library('session');
		//session_start();
	}

	public function index()
	{
	
		$aspekid = array();
		$poinaspek = array();
		$aspeknamee[][] = array();
		
		

		$getgraph1[][] = array();
		$getgraph2[][] = array();
		$getgraph3[][] = array();
		$data_kategori = array();

		$cc= $this->aspek->get()->result_array();
		$lengthdata=count($cc);
		$poinaspekall= $this->aspek->getnameaspek1();
		$lengthdata=count($cc);
		for($i=0; $i<$lengthdata; $i++){
		foreach ($this->aspek->getnameaspek1()->result_array() as $row){
		//ini
			$aspekid[] = (int) $row['id_aspek'];
			$aspeknamee[][] = (string) $row['nama_aspek'];
		//	$poinaspek[] = (string) $row['total'];
			//$total[] = (string) $row['total'];
		}
	}
	foreach ($this->aspek->getnameaspek1()->result_array() as $row){
		//$data[] = (int) $row['poin'];
		$data_kategori[] = (string) $row['nama_aspek'];
	}
		for($i=0; $i<$lengthdata; $i++){
		foreach ($this->aspek->getgrafik($i+1)->result_array() as $row){
		//ini
			//array_push($getgraph1, $row['getnama']);
			//	array_push($getgraph2, $row['total']);
				$getgraph1[$i+1][] = (string) $row['nama_employee'];
				$getgraph3[$i+1][] = (string) $row['id_employee'];
					$getgraph2[$i+1][] = (float) $row['total'];
			//$getgraph2[$i].push($row['total']);
		}
		}
		

		
		//$aspek_a['show'] = $this->aspek->getname();
		//$pjk = $this->kalkmodel->getChartData_aspek();
		//$this->load->view('headerstaf');
		$this->load->view('Allgrafik', array(
			
			
			
			'lengthdata'=>$lengthdata, 
			'aspeknamee'=>$aspeknamee, 
			'poinaspekall'=>$poinaspekall->result(),
			'getgraph1'=>$getgraph1, 
			'getgraph2'=>$getgraph2, 
		)
		);
	
		//$this->load->view('_footer');
	}

	
	public function detail()
	{
		$segment=$this->uri->segment(3); 
		$aspekid = array();
		$poinaspek = array();
		$aspeknamee[][] = array();
		
		

		$getgraph1[][] = array();
		$getgraph2[][] = array();
		$getgraph3[][] = array();
		$data_kategori = array();

		$cc= $this->aspek->get()->result_array();
		$lengthdata=count($cc);
		$poinaspekall= $this->aspek->getnameaspek1();
		$lengthdata=count($cc);
		/*for($i=0; $i<$lengthdata; $i++){
		foreach ($this->aspek->getnameaspek1()->result_array() as $row){
		//ini
			$aspekid[] = (int) $row['id_aspek'];
			$aspeknamee[][] = (string) $row['nama_aspek'];
		//	$poinaspek[] = (string) $row['total'];
			//$total[] = (string) $row['total'];
		}
	}*/
	foreach ($this->aspek->getnameaspek1()->result_array() as $row){
		//$data[] = (int) $row['poin'];
		$data_kategori[] = (string) $row['nama_aspek'];
	}
	$datagrafik = $this->aspek->getgrafikaspekk($segment);
		//for($i=0; $i<$lengthdata; $i++){
		foreach ($this->aspek->getgrafik($segment)->result_array() as $row){
		//ini
			//array_push($getgraph1, $row['getnama']);
			//	array_push($getgraph2, $row['total']);
				$getgraph1[$segment+1][] = (string) $row['nama_employee'];
				$getgraph3[$segment+1][] = (string) $row['id_employee'];
					$getgraph2[$segment+1][] = (float) $row['total'];
			//$getgraph2[$i].push($row['total']);
		//}
		}
		

		
		//$aspek_a['show'] = $this->aspek->getname();
		//$pjk = $this->kalkmodel->getChartData_aspek();
		//$this->load->view('headerstaf');
		$this->load->view('Allgrafik', array(
			
			
			
			'lengthdata'=>$lengthdata, 
			'aspeknamee'=>$aspeknamee, 
			'poinaspekall'=>$poinaspekall->result(),
			'getgraph1'=>$getgraph1, 
			'getgraph2'=>$getgraph2, 
			'datagrafik' => $datagrafik->result(),
		)
		);
	
		//$this->load->view('_footer');
	}

	
	
}


/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
