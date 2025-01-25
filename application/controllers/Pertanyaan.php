<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PertanyaanModel', 'pertanyaan');
		$this->load->model('AspekModel', 'aspek');
		//$this->load->model('AspekkuisonerMod', 'aspek');
		$this->load->library("session");
	}

	public function index()
	{
		$pertanyaan = $this->pertanyaan->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Pertanyaan',
				'pertanyaan' => $pertanyaan->result(),
				
			);
		$this->load->view('header');
		$this->load->view('pertanyaan', $data);
		$this->load->view('footer');
	}

	public function adddata()
	{
		$aspek = $this->aspek->get();
		$pertanyaan = $this->pertanyaan->get();
	
		$data = array(
				'header' => 'Tambah Pertanyaan',
				'pertanyaan' => $pertanyaan->result(),
				'aspek' => $aspek->result(),
				
			);
		$this->load->view('header');
		$this->load->view('pertanyaantambah',  $data);
		$this->load->view('footer');
	}

	public function edit()
	{
		$id=$this->uri->segment(3); 
			$pertanyaan = $this->pertanyaan->get($id);
			$aspek = $this->aspek->get();
	
		$data = array(
				'header' => 'Edit Agenda Kerja',
				'pertanyaan' => $pertanyaan->result(),
				'aspek' => $aspek->result(),
			);
		$this->load->view('header');
		$this->load->view('pertanyaanedit',  $data);
		$this->load->view('footer');
	}

	public function prosesadd()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->pertanyaan->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/pertanyaan';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/pertanyaan';
				</script>";
			}
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			

			if ($this->pertanyaan->edit($inputan) == false){
				$this->session->set_flashdata('success','Berhasil Update Data');
				
				echo "<script>
				alert('update berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/pertanyaan';
				</script>";
			
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
			
				echo "<script>
				alert('update error!!!');
			window.location.href='https://quesioner.my.id/dinas/pertanyaan';
				</script>";
			}

	}
}

	public function del($id)
	{
		//$this->aspek->del($id);
		//redirect('aspek');
		if ($this->pertanyaan->del($id) == false){
			$this->session->set_flashdata('success','Berhasil Delete');
			
			echo "<script>
			alert('delete berhasil!!!');
			window.location.href='https://quesioner.my.id/dinas/pertanyaan';
			</script>";
			//redirect(base_url().'agenda');
		}
		else{
			$this->session->set_flashdata('error',validation_errors());
			//redirect(base_url().'agenda');
			echo "<script>
			alert('delete error!!!');
			window.location.href='https://quesioner.my.id/dinas/pertanyaan';
			</script>";
		}
	}

}
