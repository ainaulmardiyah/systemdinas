<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entropy extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('EntropyModel', 'entropy');
		$this->load->model('AspekModel', 'aspek');
		$this->load->model('EmployeeModel', 'emp');
	}

	public function index()
	{
		$entropys = $this->entropy->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Poin Jawaban',
				'entropys' => $entropys->result(),
				
			);
		$this->load->view('header', $data);
		$this->load->view('entropys');
		$this->load->view('footer');
	}

	public function add()
	{
		$entropys = $this->entropy->get();
	
		$data = array(
				'header' => 'Tambah ranking',
				'entropys' => $entropys->result(),
				
			);
		$this->load->view('header');
		$this->load->view('entropys_add',  $data);
		$this->load->view('footer');
	}

	public function edit($id = null)
	{
			$entropys = $this->entropy->get();
	
		$data = array(
				'header' => 'Edit ranking',
				'entropys' => $entropys->result(),
			
			);
		$this->load->view('header');
		$this->load->view('entropys_edit',  $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->entropy->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->entropy->edit($inputan);
		}
		redirect('entropys');
	}

	public function del($id)
	{
		$this->entropy->del($id);
		redirect('entropys');
	}

}
