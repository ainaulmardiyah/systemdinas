<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('AnswerModel', 'answer');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		
	}

	public function index()
	{
		$answers = $this->answer->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Poin Jawaban',
				'answers' => $answers->result(),
				
			);
		$this->load->view('header', $data);
		$this->load->view('answers');
		$this->load->view('footer');
	}

	public function add()
	{
		$answers = $this->answer->get();
	
		$data = array(
				'header' => 'Tambah Aspek',
				'answers' => $answers->result(),
				
			);
		$this->load->view('header');
		$this->load->view('answers',  $data);
		$this->load->view('footer');
	}

	public function edit($id = null)
	{
			$answers = $this->answer->get();
	
		$data = array(
				'header' => 'Edit poinjawaban',
				'answers' => $answers->result(),
			
			);
		$this->load->view('header');
		$this->load->view('answers_edit',  $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->answers->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->answers->edit($inputan);
		}
		redirect('answers');
	}

	public function del($id)
	{
		$this->answers->del($id);
		redirect('answers');
	}

}
