<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('BidangModel', 'bdg');
		//$this->load->model('AspekkuisonerModel', 'aspek');
		$this->load->library('session');
	}

	public function index()
	{
		$id_staf = $this->session->iduserlogin;
		$bdg = $this->bdg->get();
		//$cutistaf = $this->cuti->getid($id_staf);
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Manage Cuti',
				'bdg' => $bdg->result(),
				
			);
	
		$this->load->view('header');
		$this->load->view('bidang', $data);
		$this->load->view('footer');
		
	}
	public function adddata()
	{
		
		$bdg = $this->bdg->get();
		
		$data = array(
				'header' => 'Tambah Poin Jawaban',
				'bdg' => $bdg->result(),
			);
		$this->load->view('header');
		$this->load->view('bidangtambah',  $data);
		$this->load->view('footer');
	}

	public function edit()
	{
		$id=$this->uri->segment(3); 
		$bdg = $this->bdg->get($id);
			$data = array(
				'header' => 'Edit poinjawaban',
				'bdg' => $bdg->result(),
		
			);
		$this->load->view('header');
		$this->load->view('bidangedit',  $data);
		$this->load->view('footer');
	}

	public function prosesadd()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->bdg->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/bidang';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/bidang';
				</script>";
			}
			
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->bdg->edit($inputan) == false){
				$this->session->set_flashdata('success','Berhasil Update Data');
				
				echo "<script>
				alert('update berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/bidang';
				</script>";
			
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
			
				echo "<script>
				alert('update error!!!');
			window.location.href='https://quesioner.my.id/dinas/bidang';
				</script>";
			}
	}
}

	public function del($id)
	{
		//alert("berhasil delete");
		if ($this->bdg->del($id) == false){
			$this->session->set_flashdata('success','Berhasil Delete');
			
			echo "<script>
			alert('delete berhasil!!!');
			window.location.href='https://quesioner.my.id/dinas/bidang';
			</script>";
			//redirect(base_url().'agenda');
		}
		else{
			$this->session->set_flashdata('error',validation_errors());
			//redirect(base_url().'agenda');
			echo "<script>
			alert('delete error!!!');
			window.location.href='https://quesioner.my.id/dinas/bidang';
			</script>";
		}
	}
}





