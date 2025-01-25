<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Savingjawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('SavingjawabanModel', 'kalkmodel');
		$this->load->model('KuisonerModel', 'kuskmodel');
		$this->load->model('AspekprimaryModel', 'prkmodel');
		$this->load->model('PointjawabanModel', 'ponkmodel');
		$this->load->model('UserModel', 'usmodel');
	}

	public function index()
	{
		$query = $this->kalkmodel->get();
		$query2 = $this->prkmodel->get();
		$query3 = $this->ponkmodel->get();
		$query4 = $this->usmodel->get();
		$pj = $this->kuskmodel->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Saving Jawaban',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
				'pj2' => $query2->result(),
				'pj3' => $query3->result(),
				'pj4' => $query4->result(),
			);
		$this->load->view('_header', $data);
		$this->load->view('saving_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get();
		$query2 = $this->prkmodel->get();
		$query3 = $this->ponkmodel->get();
		$query4 = $this->usmodel->get();
		$data = array(
				'header' => 'Tambah Saving Jawaban',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
				'pj2' => $query2->result(),
				'pj3' => $query3->result(),
				'pj4' => $query4->result(),
			);
		$this->load->view('_header');
		$this->load->view('saving_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
			$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get($id);
		$query2 = $this->prkmodel->get();
		$query3 = $this->ponkmodel->get();
		$query4 = $this->usmodel->get();
		$data = array(
				'header' => 'Edit Saving Jawaban',
				'kalkmodel' => $query->row(),
				'pj' => $pj->result(),
				'pj2' => $query2->result(),
				'pj3' => $query3->result(),
				'pj4' => $query4->result(),
			);
		$query = $this->kalkmodel->get($id);
		
		$this->load->view('_header');
		$this->load->view('saving_edit',  $data);
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
		redirect('savingjawaban');
	}

	public function del($id)
	{
		$this->kalkmodel->del($id);
		redirect('savingjawaban');
	}

}
