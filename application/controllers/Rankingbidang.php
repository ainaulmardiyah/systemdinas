<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankingbidang extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('RankingModel', 'rank');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
	}

	public function index()
	{
		$id_bdangsessioan = $this->session->id_bidang;
		$ranks = $this->rank->getbidang($id_bdangsessioan);
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Ranking Karyawan',
				'ranks' => $ranks->result(),
				
			);
		$this->load->view('headerstaf');
		$this->load->view('rankingbidang',  $data);
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
		$this->load->view('headerstaf');
		$this->load->view('rankdetailbidang',  $data);
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
		$this->load->view('headerstaf');
		$this->load->view('answerdetailbidang',  $data);
		//$this->load->view('footer');
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
