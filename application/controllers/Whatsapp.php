<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('WhatsappModel', 'whatsapp');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
		
	}

	public function index()
	{
		//$personal = $this->personal->datareceive();
		$max1 = $this->whatsapp->maxiduser();
		$m=$max1->row();
		$getsegment = $m->id_bidang;
		
		$whatsapp = $this->whatsapp->datareceive();
		$whatsapps = $this->whatsapp->datareceiveid($getsegment);
		$whatsappreply = $this->whatsapp->whatsappreply($getsegment);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage whatsapp',
				'whatsapp' => $whatsapp->result(),
				'whatsapps' => $whatsapps->result(),
				'whatsappreply' => $whatsappreply->result(),
			);
			$level = $this->session->level;	
		if($level == 'kepala_dinas'){
		$this->load->view('header');
		$this->load->view('whatsapp', $data);
		//$this->load->view('footer');
		}
		else if($level == 'staf' or $level == 'kepala_bidang'){
		$this->load->view('headerstaf');
		$this->load->view('whatsapp', $data);
		//$this->load->view('footer');
		}
	}
	public function detail()
	{
		$whatsapp = $this->whatsapp->datareceive();
		$getsegment=$this->uri->segment(3); 
		$whatsapps = $this->whatsapp->datareceiveid($getsegment);
		
		$whatsappreply = $this->whatsapp->whatsappreply($getsegment);
		//$whatsappreply1 = sort($whatsappreply->result_array());
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage whatsapp',
				'whatsapp' => $whatsapp->result(),
				'whatsapps' => $whatsapps->result(),
				'whatsappreply' => $whatsappreply->result(),
				
			);
			$level = $this->session->level;	
				if($level == 'kepala_dinas'){
				$this->load->view('header');
				$this->load->view('whatsapp', $data);
				//$this->load->view('footer');
				}
				else if($level == 'staf' or $level == 'kepala_bidang'){
				$this->load->view('headerstaf');
				$this->load->view('whatsapp', $data);
				//$this->load->view('footer');
				}
		
	}
public function proses()
	{
		$inputan = $this->input->post(null, TRUE);
		$getsegment = $inputan['id_whatsapp_r'];
		if(isset($_POST['add'])) {
			
			$this->whatsapp->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->whatsapp->edit($inputan);
		}
		redirect('Whatsapp/detail/'.$getsegment);
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

	

	public function del($id)
	{
		$this->aspek->del($id);
		redirect('aspek');
	}

}
