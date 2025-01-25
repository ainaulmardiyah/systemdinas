<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Personal extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('PersonalModel', 'personal');
		$this->load->model('EmployeeModel', 'emp');
		$this->load->library('session');
		
	}

	public function index()
	{
		$id_staf = $this->session->iduserlogin;		
		$personal = $this->personal->datareceive();
		$max1 = $this->personal->maxiduser();
		$m=$max1->row();
		$getsegment = $m->id_chat;
		//$getsegment=1; 
		//$getsegment=$this->uri->segment(3); 
		//$personals = $this->personal->datareceiveid($max);
		$personalreply = $this->personal->personalreply($getsegment);
		$kounthat = $this->personal->kounthat($getsegment);
		$personals = $this->personal->datareceiveid($getsegment);
		$employeeall = $this->emp->get();
		$personalvalidasi = $this->personal->get();
		//$personalreply = $this->personal->personalreply($max);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage personal',
				'personal' => $personal->result(),
				'personals' => $personals->result(),
				'personalreply' => $personalreply->result(),
				'employeeall' => $employeeall->result(),
				'personalvalidasi' => $personalvalidasi->result(),
				
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('personal', $data);
		//$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('personal', $data);
		//$this->load->view('footer');
		}
		
	}
	public function detail()
	{
		$personalvalidasi = $this->personal->get();
		$personal = $this->personal->datareceive();
		$empall = $this->personal->getemployee();
		$getsegment=$this->uri->segment(3); 

		$getnpppp = $this->emp->get($getsegment);
		$empalls = $this->personal->getemployeesegent();
		
		$personals = $this->personal->datareceiveid($getsegment);
		$personalreply = $this->personal->personalreply($getsegment);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage personal',
				'personal' => $personal->result(),
				'getnpppp' => $getnpppp->row(),
				'empalls' => $empalls->result(),
				'personals' => $personals->result(),
				'personalreply' => $personalreply->result(),
				'employeeall' =>$empall->result(),
				'personalvalidasi' => $personalvalidasi->result(),
				
			);
		$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('personal', $data);
		//$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('personal', $data);
		//$this->load->view('footer');
		}
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
	
	public function prosesadd()
	{
		$id_staf = $this->session->iduserlogin;		
		$inputan = $this->input->post(null, TRUE);
		$id_chat_new =  $inputan['chattingid']; 
		$pesanchat = $inputan['pesanchat'];
		if(isset($_POST['add'])) {
			
			$this->personal->addfirstchat($id_chat_new, $pesanchat, $id_staf);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->personal->edit($inputan);
		}
		redirect('personal/detail/'.$getsegment);
	}

	public function proses()
	{
		$inputan = $this->input->post(null, TRUE);
		$getsegment = $inputan['id_chat_r'];
		if(isset($_POST['add'])) {
			
			$this->personal->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->personal->edit($inputan);
		}
		redirect('personal/detail/'.$getsegment);
	}

	public function del($id)
	{
		$this->aspek->del($id);
		redirect('aspek');
	}

}
