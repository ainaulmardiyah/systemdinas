<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Loginstaf extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$ses = $this->load->library('session');
		
		$this->load->model('EmployeeModel', 'employee');
		$this->load->model('BidangModel', 'bidang');
	}

	public function index()
	{
	
		
		$this->load->view('Loginstaf');
	}public function logout()
	{
	
		
		
		   $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
 
		 return redirect('Loginstaf');
	}
	
	public function login()
	{
	
	
		if(isset($_POST['login'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//$bidang_karyawan = $this->input->post('bidang_karyawan');
			//$jabatan_karyawan = $this->input->post('jabatan_karyawan');
			$loginemployee = $this->employee->login($username, $password);
			$tunjuk = $loginemployee->row();
			//$query = $this->usmodel->login($username, $password);
			//$this->quest->add($inputan);
			if(count($loginemployee->result()) > 0){
				$newdata = array(
					'username' => $username,
					'password' => $password,
					'iduserlogin' =>$tunjuk->id_emp,
					'level' =>$tunjuk->level_user,
					'jabatan_karyawan' => $tunjuk->jabatan_karyawan,
					'bidang_karyawan' => $tunjuk->nama_bidang,
					'id_bidang' => $tunjuk->id_bidang,
					//'jabatan_karyawan' => $tunjuk->level_user,
					'foto' =>$tunjuk->foto,
					'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					
					if($this->session->level == 'staf' or $this->session->level == 'kepala_bidang'){
				redirect('Kuisoner/nextquestion/1');
					}
					else{
						redirect('Loginstaf');
					}
			}
			else{
				redirect('Loginstaf');
			}
		} 
		
	
	}
public function addregister()
	{
		
		$bidangkaryawan = $this->bidang->getnamabidang();
		$resultbidang = $bidangkaryawan->result();
		$data = array(
			'header' => 'kuisoner',
			'resultbidang' => $resultbidang
			
		);
		$this->load->view('Register', $data);
		//$this->load->view('footer');
	}
	public function register()
	{
	
	
		if(isset($_POST['register'])) {
			
		
			$inputan = $this->input->post(null, TRUE);
			
			$this->employee->add($inputan);
			
		
			
		}
		echo "<script>
					alert('Berhasil Registrasi!!!');
					window.location.href='https://quesioner.my.id/dinas/Loginstaf';
					</script>";
		
					} 
		
	
	
public function uploadpicture()
{
					
					
						
							$inputan = $this->input->post(null, TRUE);
							
						if($this->employee->change($inputan)){
							
						
							
						
						echo "<script>
									alert('Berhasil Ganti Profile!!!');
									window.location.href='https://quesioner.my.id/dinas/cuti';
									</script>";
						
									} 
								}
					
					
				
				

	
}
