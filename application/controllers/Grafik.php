<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('GrafikModel', 'kalkmodel');
		$this->load->model('KuisonerModel', 'kuskmodel');
	}

	public function index()
	{
		$query = $this->kalkmodel->get();
		$pj = $this->kuskmodel->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		foreach ($this->kalkmodel->getChartData_aspek()->result_array() as $row){
			$data[] = (int) $row['poin'];
			$data_kategori[] = (int) $row['id_aspek_user'];
		}
		
		foreach ($this->kalkmodel->getChartData_userid()->result_array() as $rows){
			$data2[] = (int) $rows['poin'];
			$data_user[] = (int) $rows['id_user_s'];
			
			//$id[] = (int) $rows['ID_PRODI'];
		}
		
		//for($i=0; $i<=$rows['ID_ALUMNI']; $i++){
			//$prodi['show'] = $this->mread->getJurusan($id[$i]);
			//echo $id[$i]."<br>";
		//}
		
		//$id = 15;
		$aspek_a['show'] = $this->kalkmodel->getname();
		$this->load->view('_header', $aspek_a);
		$this->load->view('chart_dashboard', array(
			'data'=>$data, 
			'data_kategori'=>$data_kategori, 
			'data2'=>$data2, 
			'data_user'=>$data_user)
		);
	
		$this->load->view('_footer');
	}

	public function add()
	{
		$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get();
		$data = array(
				'header' => 'Tambah Point Jawaban',
				'kalkmodel' => $query->result(),
				'pj' => $pj->result(),
			);
		$this->load->view('_header');
		$this->load->view('pj_tambah',  $data);
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
			$pj = $this->kuskmodel->get();
		$query = $this->kalkmodel->get($id);
		$data = array(
				'header' => 'Edit Point Jawaban',
				'kalkmodel' => $query->row(),
				'pj' => $pj->result(),
			);
		$query = $this->kalkmodel->get($id);
		
		$this->load->view('_header');
		$this->load->view('pj_edit',  $data);
		$this->load->view('_footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->kalkmodel->add($inputan);
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->kalkmodel->edit($inputan);
		}
		redirect('pointjawaban');
	}

	public function del($id)
	{
		$this->kalkmodel->del($id);
		redirect('pointjawaban');
	}

}
