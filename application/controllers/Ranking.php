<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('RankingModel', 'rank');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
	}

	public function index()
	{
		$en[][] = array();
		$ranks = $this->rank->get();
		$l =$this->rank->get()->result();
		for($i=0; $i<150; $i++){
			foreach ( $this->rank->getdetail($l[$i]->id_user_ranking)->result_array() as $row){
			//ini
				//array_push($getgraph1, $row['getnama']);
				//	array_push($getgraph2, $row['total']);
					$en[$i][] = (float) $row['nilai_log_entropy'] * log( $row['nilai_log_entropy'], 2);
						
				//$getgraph2[$i].push($row['total']);
			}
			}
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Ranking Karyawan',
				'ranks' => $ranks->result(),
				'en' => $en,
				
				
			);
		$this->load->view('header');
		$this->load->view('rank',  $data);
		//$this->load->view('footer');
	}
	public function detail()
	{
		$id_user_ranking=$this->uri->segment(3);
		$ranks = $this->rank->getdetail($id_user_ranking);
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Poin Jawaban',
				'ranks' => $ranks->result(),
				
			);
		$this->load->view('header');
		$this->load->view('rankdetail',  $data);
		//$this->load->view('footer');
	}
	public function answerdetail()
	{
		$id_user_ranking=$this->uri->segment(3);
		$ranks = $this->rank->getdetailanswer($id_user_ranking);
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'List Answer Detail',
				'ranks' => $ranks->result(),
				
			);
		$this->load->view('header');
		$this->load->view('answerdetail',  $data);
		//$this->load->view('footer');
	}
	public function answerdetailstaf()
	{
		$id_user_ranking = $this->session->iduserlogin;	
		$level = $this->session->level;	
		//$id_user_ranking=$this->uri->segment(3);
		$ranks = $this->rank->getdetailanswer($id_user_ranking);
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		if($level == 'staf' or $level == 'kepala_bidang'){
		$data = array(
				'header' => 'List Answer Detail',
				'ranks' => $ranks->result(),
				
			);
		$this->load->view('headerstaf');
		$this->load->view('answerdetailstaf',  $data);
		//$this->load->view('footer');
		}
		else{
			redirect('loginstaf');
		}
	}
	public function add()
	{
		$ranks = $this->rank->get();
	
		$data = array(
				'header' => 'Tambah ranking',
				'ranks' => $ranks->result(),
				
			);
		$this->load->view('header');
		$this->load->view('ranks_add',  $data);
		$this->load->view('footer');
	}

	public function edit($id = null)
	{
			$ranks = $this->rank->get();
	
		$data = array(
				'header' => 'Edit ranking',
				'ranks' => $ranks->result(),
			
			);
		$this->load->view('header');
		$this->load->view('ranks_edit',  $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->rank->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->rank->edit($inputan);
		}
		redirect('ranks');
	}

	public function del($id)
	{
		$this->rank->del($id);
		redirect('ranks');
	}

}
