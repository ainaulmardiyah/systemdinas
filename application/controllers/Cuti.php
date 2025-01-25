<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('CutiModel', 'cuti');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
	}

	public function index()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->get();
		$cutistaf = $this->cuti->getid($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}
	public function starmail()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->getstar();
		$cutistaf = $this->cuti->getidstar($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}

	public function unstarmail()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->getunstar();
		$cutistaf = $this->cuti->getidunstar($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}
	public function sentmail()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->getsent();
		$cutistaf = $this->cuti->getid($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}
	public function trashmail()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->gettrash();
		$cutistaf = $this->cuti->getid($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}
	public function draftmail()
	{
		$id_staf = $this->session->iduserlogin;
		$cuti = $this->cuti->getdraft();
		$cutistaf = $this->cuti->getid($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'cuti' => $cuti->result(),
				
			);
		$datastaf = array(
				'header' => 'Manage Cuti',
				'cuti' => $cutistaf->result(),
				
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('cuti', $data);
		$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('cuti', $datastaf);
		$this->load->view('footer');
		}
		
	}

	

	public function star()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->stars($id_star);
		
		redirect('cuti');
	}
	public function adminstar()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->adminstar($id_star);
		
		redirect('cuti');
	}
	public function admininbox()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->admininbox($id_star);
		
		redirect('cuti');
	}
	public function admindraft()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->admindraft($id_star);
		
		redirect('cuti');
	}
	public function adminsent()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->adminsent($id_star);
		
		redirect('cuti');
	}
	public function admintrash()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->admintrash($id_star);
		
		redirect('cuti');
	}
	public function adminapprove()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->adminapprove($id_star);
		
		redirect('cuti');
	}
	public function prosesadd()
	{
		
				if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->cuti->addall($inputan);
		} 
		
		redirect('cuti');
	}
	public function adminreject()
	{
		
			$id_star=$this->uri->segment(3);
			$this->cuti->adminreject($id_star);
		
		redirect('cuti');
	}
public function labeling()
	{
		print_r($this->input->post('id'));die; 
		 $label=$this->input->post('id',true);
		
			$id_star=$this->uri->segment(3);
			//$=$data['id'];
			$this->cuti->labeling($id_star, $label);
		 
		redirect('cuti');
	}

	public function del($id)
	{
		$this->aspek->del($id);
		redirect('aspek');
	}

}
