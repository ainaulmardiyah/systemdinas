<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalModel extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PersonalModel', 'personal');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
		
	}

	public function index()
	{
		$personal = $this->personal->datareceive();
		$max1 = $this->personal->maxiduser();
		$max = $max->row();
		//$getsegment=1; 
		$getsegment=$this->uri->segment(3); 
		$personals = $this->personal->datareceiveid($getsegment, $max);
		$personalreply = $this->personal->personalreply($getsegment, $max);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage personal',
				'personal' => $personal->result(),
				'personals' => $personals->result(),
				'personalreply' => $personalreply->result(),
				
			);
		$this->load->view('header');
		$this->load->view('personal', $data);
		$this->load->view('footer');
	}
	public function detail()
	{
		$max1 = $this->personal->maxiduser();
		$max = $max->row();
		$personal = $this->personal->datareceive();
		$getsegment=$this->uri->segment(3); 
		$personals = $this->personal->datareceiveid($getsegment);
		$personalreply = $this->personal->personalreply($getsegment);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage whatsapp',
				'personal' => $personal->result(),
				'personals' => $personals->result(),
				'personalreply' => $personalreply->result(),
				
			);
		$this->load->view('header');
		$this->load->view('personal', $data);
		$this->load->view('footer');
	}
	public function add()
	{
		$aspek = $this->aspek->get();
	
		$data = array(
				'header' => 'Tambah Aspek',
				'aspeks' => $aspek->result(),
				
			);
		$this->load->view('header');
		$this->load->view('aspek',  $data);
		$this->load->view('footer');
	}

	public function edit($id = null)
	{
			$aspeks = $this->aspek->get();
	
		$data = array(
				'header' => 'Edit Aspek Kerja',
				'aspeks' => $aspeks->result(),
			
			);
		$this->load->view('header');
		$this->load->view('aspek_edit',  $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->aspek->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->aspek->edit($inputan);
		}
		redirect('aspek');
	}

	public function del($id)
	{
		$this->aspek->del($id);
		redirect('aspek');
	}

}
