<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspek extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('AspekModel', 'aspek');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library("session");
	}

	public function index()
	{
		$aspek = $this->aspek->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Aspek',
				'aspek' => $aspek->result(),
				
			);
		$this->load->view('header');
		$this->load->view('aspek', $data);
		$this->load->view('footer');
	}

	public function adddata()
	{
		$aspek = $this->aspek->get();
		
		$data = array(
				'header' => 'Tambah Aspek',
				'aspeks' => $aspek->result(),
				
			);
		$this->load->view('header');
		$this->load->view('aspektambah',  $data);
		$this->load->view('footer');
	}

	public function edit()
	{
		$id=$this->uri->segment(3); 
			$aspeks = $this->aspek->get($id);
	
		$data = array(
				'header' => 'Edit Aspek Kerja',
				'aspek' => $aspeks->result(),
			
			);
		$this->load->view('header');
		$this->load->view('aspekedit',  $data);
		$this->load->view('footer');
	}

	public function prosesadd()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->aspek->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/aspek';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/aspek';
				</script>";
			}
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			

			if ($this->aspek->edit($inputan) == false){
				$this->session->set_flashdata('success','Berhasil Update Data');
				
				echo "<script>
				alert('update berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/aspek';
				</script>";
			
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
			
				echo "<script>
				alert('update error!!!');
			window.location.href='https://quesioner.my.id/dinas/aspek';
				</script>";
			}


		}
		//redirect('aspek');
	}

	public function del($id)
	{
		//$this->aspek->del($id);
		//redirect('aspek');
		if ($this->aspek->del($id) == false){
			$this->session->set_flashdata('success','Berhasil Delete');
			
			echo "<script>
			alert('delete berhasil!!!');
			window.location.href='https://quesioner.my.id/dinas/aspek';
			</script>";
			//redirect(base_url().'agenda');
		}
		else{
			$this->session->set_flashdata('error',validation_errors());
			//redirect(base_url().'agenda');
			echo "<script>
			alert('delete error!!!');
			window.location.href='https://quesioner.my.id/dinas/aspek';
			</script>";
		}
	}

}
