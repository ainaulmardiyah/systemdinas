<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$ses = $this->load->library('session');
		
		$this->load->model('EmployeeModel', 'employee');
	}

	public function index()
	{
	
		
		$this->load->view('Login');
	}public function logout()
	{
	
		
		
		   $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
 
		 return redirect('Login');
	}
	
	public function login()
	{
	
	
		if(isset($_POST['login'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$loginemployee = $this->employee->login($username, $password);
			$tunjuk = $loginemployee->row();
			//$query = $this->usmodel->login($username, $password);
			//$this->quest->add($inputan);
			if(count($loginemployee->result()) > 0){
				$newdata = array(
					'username' => $username,
					'email' => $password,
					'iduserlogin' =>$tunjuk->id_emp,
					'level' =>$tunjuk->level_user,
					'foto' =>$tunjuk->foto,
					'jabatan_karyawan' => $tunjuk->jabatan_karyawan,
					'bidang_karyawan' => $tunjuk->nama_bidang,
					'id_bidang' => $tunjuk->id_bidang,
					'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					$setemail = $this->session->iduserlogin;
					//print_r($setemail);
						if($this->session->level == 'kepala_dinas'){
				redirect('Whatsapp');
						}
						else{
							redirect('Login');
						}
			}
			else{
				redirect('Login');
			}
		} 
		
	
	}

	


	
}
