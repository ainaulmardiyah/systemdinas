<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspekkuisoner extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('AspekkuisonerModel', 'questmodel');
		$this->load->model('AspekprimaryModel', 'aspmodel');
	}

	public function index()
	{
		$query = $this->questmodel->get();
		$query2 = $this->aspmodel->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Aspek kuisoner',
				'questmodel' => $query->result(),
				'aspmodel' => $query2->result(),
			);
		$this->load->view('_header', $data);
		$this->load->view('asquest_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$query2 = $this->aspmodel->get();
		$data = array(
				'header' => 'Tambah Aspek kuisoner',
				'aspmodel' => $query2->result(),
			);
		$this->load->view('_header');
		$this->load->view('asquest_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
		$query2 = $this->aspmodel->get();
		$query = $this->questmodel->get($id);
		$data = array(
				'header' => 'Edit Aspek kuisoner',
				'questmodel' => $query->row(),
				'aspmodel' => $query2->result(),
			);
		$this->load->view('_header');
		$this->load->view('asquest_edit', $data);
		$this->load->view('_footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->questmodel->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->questmodel->edit($inputan);
		}
		redirect('aspekkuisoner');
	}

	public function del($id)
	{
		$this->questmodel->del($id);
		redirect('aspekkuisoner');
	}

}
