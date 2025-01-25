<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('AgendaModel', 'agenda');
		$this->load->model('EmployeeModel', 'Employee');
		$this->load->model('TimelineModel', 'timeline');
		$this->load->library("session");
	}

	public function index()
	{
		$agenda = $this->agenda->get();
		
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Agenda Kerja Per Bulan',
				'agenda' => $agenda->result(),
				
			);
		$this->load->view('header');
		$this->load->view('agenda', $data);
		$this->load->view('footer');
	}
	public function adddata()
	{
		$agenda = $this->agenda->get();
		$emp = $this->Employee->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Agenda Kerja Per Bulan',
				'agenda' => $agenda->result(),
				'emp' => $emp->result(),
				
			);
		$this->load->view('header');
		$this->load->view('agendatambah', $data);
		$this->load->view('footer');
	}
	
	public function edit()
	{
		$id=$this->uri->segment(3); 
		$agenda = $this->agenda->get($id);
		$emp = $this->Employee->get();
		$data = array(
				'header' => 'Edit Agenda Kerja',
				'emp' => $emp->result(),
				'agenda' => $agenda->result(),
			
			);
		$this->load->view('header');
		$this->load->view('agendaedit',  $data);
		$this->load->view('footer');
	}
	public function addtime()
	{
		$id=$this->uri->segment(3); 
		$agenda = $this->agenda->get($id);
		$agendaall = $this->agenda->get();
		$time = $this->agenda->getrelasitime($id);
		$timepm = $this->agenda->getrelasitimepm($id);
		$emp = $this->Employee->get();
		$data = array(
				'header' => 'Add Event ',
				'emp' => $emp->result(),
				'agenda' => $agenda->result(),
				'agendaall' => $agendaall->result(),
				'time' => $time->result(),
				'timepm' => $timepm->result(),
			
			);
		$this->load->view('header');
		$this->load->view('eventedit',  $data);
		$this->load->view('footer');
	}
	public function prosesevent()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->timeline->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
			}
			
		} 
	}
	public function prosesadd()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->agenda->add($inputan)== false){
				$this->session->set_flashdata('success','Berhasil Tambah Data');
				
				echo "<script>
				alert('add data berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
				//redirect(base_url().'agenda');
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
				//redirect(base_url().'agenda');
				echo "<script>
				alert('add data error!!!');
				window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
			}
			
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			
			if ($this->agenda->edit($inputan) == false){
				$this->session->set_flashdata('success','Berhasil Update Data');
				
				echo "<script>
				alert('update berhasil!!!');
				window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
			
			}
			else{
				$this->session->set_flashdata('error',validation_errors());
			
				echo "<script>
				alert('update error!!!');
			window.location.href='https://quesioner.my.id/dinas/agenda';
				</script>";
			}
			
		}
	
	}

	public function del($id)
	{
		
		//alert("berhasil delete");
		if ($this->agenda->del($id) == false){
			$this->session->set_flashdata('success','Berhasil Delete');
			
			echo "<script>
			alert('delete berhasil!!!');
			window.location.href='https://quesioner.my.id/dinas/agenda';
			</script>";
			//redirect(base_url().'agenda');
		}
		else{
			$this->session->set_flashdata('error',validation_errors());
			//redirect(base_url().'agenda');
			echo "<script>
			alert('delete error!!!');
			window.location.href='https://quesioner.my.id/dinas/agenda';
			</script>";
		}
		//redirect('agenda');
	}

}
