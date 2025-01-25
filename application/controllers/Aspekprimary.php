<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspekprimary extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('AspekprimaryModel', 'kalkmodel');
		$this->load->model('KuisonerModel', 'kuskmodel');
	}

	public function index()
	{
		$query = $this->kalkmodel->get();
		$pj = $this->kuskmodel->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Aspek Primary',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
			);
		$this->load->view('_header', $data);
		$this->load->view('primary_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get();
		$data = array(
				'header' => 'Tambah Aspek Primary',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
			);
		$this->load->view('_header');
		$this->load->view('primary_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
			$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get($id);
		$data = array(
				'header' => 'Edit Aspek Primary',
				'kalkmodel' => $query->row(),
				'pj' => $pj->result(),
			);
		$query = $this->kalkmodel->get($id);
		
		$this->load->view('_header');
		$this->load->view('primary_edit',  $data);
		$this->load->view('_footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->kalkmodel->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->kalkmodel->edit($inputan);
		}
		redirect('aspekprimary');
	}

	public function del($id)
	{
		$this->kalkmodel->del($id);
		redirect('aspekprimary');
	}

}
