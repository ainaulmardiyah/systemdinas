<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel', 'kalkmodel');
		$this->load->model('KuisonerModel', 'kuskmodel');
	}

	public function index()
	{
		$query = $this->kalkmodel->get();
		$pj = $this->kuskmodel->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Point Jawaban',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
			);
		$this->load->view('_header', $data);
		$this->load->view('user_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get();
		$data = array(
				'header' => 'Tambah Point Jawaban',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
			);
		$this->load->view('_header');
		$this->load->view('user_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
			$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get($id);
		$data = array(
				'header' => 'Edit Point Jawaban',
				'kalkmodel' => $query->row(),
				'pj' => $pj->result(),
			);
		$query = $this->kalkmodel->get($id);
		
		$this->load->view('_header');
		$this->load->view('user_edit',  $data);
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
		redirect('user');
	}

	public function del($id)
	{
		$this->kalkmodel->del($id);
		redirect('user');
	}

}
