<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('AgendaModel', 'agenda');
		$this->load->model('EmployeeModel', 'Employee');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		
	}

	public function index()
	{
		$agenda = $this->agenda->getkalender();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Agenda Kerja Per Bulan',
				'agenda' => $agenda->result(),
				
			);
			
	//	$this->load->view('header');
		$this->load->view('kalender', $data);
	//	$this->load->view('footer');
	}

	public function add()
	{
		$Employeeq = $this->Employee->get();
	
		$data = array(
				'header' => 'Tambah Agenda Kerja',
				'Employee' => $Employeeq->result(),
				
			);
		$this->load->view('header');
		$this->load->view('agenda_tambah',  $data);
		$this->load->view('footer');
	}

	public function edit($id = null)
	{
			$Employees = $this->Employee->get();
	
		$data = array(
				'header' => 'Edit Agenda Kerja',
				'Employee' => $Employees->row(),
			
			);
		$this->load->view('header');
		$this->load->view('agenda_edit',  $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->agenda->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->agenda->edit($inputan);
		}
		redirect('agenda');
	}

	public function del($id)
	{
		$this->agenda->del($id);
		redirect('agenda');
	}

}
