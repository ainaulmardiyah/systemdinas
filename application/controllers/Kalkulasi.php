<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('KalkulasiModel', 'kalkmodel');
		$this->load->model('KuisonerModel', 'kuskmodel');
		$this->load->model('AspekprimaryModel', 'aspquest');
		
	}

	public function index()
	{
		$query = $this->kalkmodel->get();
		$aspek = $this->kuskmodel->get();
		$query2 = $this->aspquest->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Aspek kuisoner',
				'kalkmodel' => $query->result(),
				'aspek' => $aspek->result(),
				'aspquest' => $query2->result(),
			);
		$this->load->view('_header');
		$this->load->view('kalkulasi_tampil',  $data);
		$this->load->view('_footer');
	}

	public function add()
	{
		$aspek = $this->kuskmodel->get();
		$query = $this->kalkmodel->get();
		$query2 = $this->aspquest->get();
		$data = array(
				'header' => 'Tambah kalkulasi',
				'kalkmodel' => $query->result(),
				'aspek' => $aspek->result(),
				'aspquest' => $query2->result(),
			);
		$this->load->view('_header');
		$this->load->view('kalkulasi_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
			$aspek = $this->kuskmodel->get();
		$query = $this->kalkmodel->get($id);
		$query2 = $this->aspquest->get();
		$data = array(
				'header' => 'Edit kalkulasi',
				'kalkmodel' => $query->row(),
				'aspek' => $aspek->result(),
				'aspquest' => $query2->result(),
			);
		
		
		$this->load->view('_header');
		$this->load->view('kalkulasi_edit',  $data);
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
		redirect('kalkulasi');
	}

	public function del($id)
	{
		$this->kalkmodel->del($id);
		redirect('kalkulasi');
	}

}
