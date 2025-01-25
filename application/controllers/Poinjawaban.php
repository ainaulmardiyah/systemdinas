<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poinjawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel', 'pertanyaan');
		$this->load->model('AspekModel', 'aspek');
		
		$this->load->model('PoinjawabanModel', 'poinjwb');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library("session");
	}

	public function index()
	{
		$poinjwbs = $this->poinjwb->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Poin Jawaban',
				'poinjwbs' => $poinjwbs->result(),
				
			);
		$this->load->view('header');
		$this->load->view('poinjawaban', $data);
		$this->load->view('footer');
	}

	public function adddata()
	{
		$poinjwbs = $this->poinjwb->get();
		$pertanyaan = $this->pertanyaan->get();
		$aspek = $this->aspek->get();
		
		$data = array(
				'header' => 'Tambah Poin Jawaban',
				'poinjwbs' => $poinjwbs->result(),
				'aspek' => $aspek->result(),
				'pertanyaan' => $pertanyaan->result(),
			
			);
		$this->load->view('header');
		$this->load->view('poinjawabantambah',  $data);
		//$this->load->view('footer');
	}

	public function edit()
	{
		$id=$this->uri->segment(3); 
		$pertanyaan = $this->pertanyaan->get();
		$aspek = $this->aspek->get();
			$poinjwbs = $this->poinjwb->get($id);
			$pertanyaanshow = $this->pertanyaan->getrelasi($id);
			$p=$pertanyaanshow->row();
			$id_pt = $p->id_pertanyaan;
			$jawabanshow =$this->pertanyaan->getrelasijawab($id_pt);
			$data = array(
				'header' => 'Edit poinjawaban',
				'poinjwb' => $poinjwbs->result(),
				'aspek' => $aspek->result(),
				'pertanyaan' => $pertanyaan->result(),
				'jawabanshow' => $jawabanshow->result(),
				'pertanyaanshow' => $pertanyaanshow->result(),
			
			);
		$this->load->view('header');
		$this->load->view('poinjawabanedit',  $data);
		//$this->load->view('footer');
	}

	public function prosesadd()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->poinjwb->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/poinjawaban';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/poinjawaban';
				</script>";
			}
			
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->poinjwb->edit($inputan) == false){
				$this->session->set_flashdata('success','Berhasil Update Data');
				
				echo "<script>
				alert('update berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/poinjawaban';
				</script>";
			
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
			
				echo "<script>
				alert('update error!!!');
			window.location.href='https://quesioner.my.id/dinas/poinjawaban';
				</script>";
			}
	}
}

	public function del($id)
	{
		//alert("berhasil delete");
		if ($this->poinjwb->del($id) == false){
			$this->session->set_flashdata('success','Berhasil Delete');
			
			echo "<script>
			alert('delete berhasil!!!');
			window.location.href='https://quesioner.my.id/dinas/poinjawaban';
			</script>";
			//redirect(base_url().'agenda');
		}
		else{
			$this->session->set_flashdata('error',validation_errors());
			//redirect(base_url().'agenda');
			echo "<script>
			alert('delete error!!!');
			window.location.href='https://quesioner.my.id/dinas/poinjawaban';
			</script>";
		}
	}
}


