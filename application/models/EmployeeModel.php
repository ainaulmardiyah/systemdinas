<?php
class EmployeeModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('employee as emp');
		
		if($id != null) {
			$this->db->where('emp.id_emp', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function login($username, $password)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('employee as emp');
		$this->db->join('bidang_karyawan as bdg', "bdg.id_bidang = emp.bidang_karyawan");
		$this->db->where('emp.username', $username);
		$this->db->where('emp.password', $password);
		
		$query = $this->db->get();
		return $query;
	}
	private function _check_file_upload_path($upload_path)
	{
			if(! is_dir($upload_path))
					mkdir($upload_path,0777,TRUE);
			return $upload_path;
	}
	public function change($data)
	{
		$iduserlogin = $this->session->iduserlogin;
		$level = $this->session->level;
			//mkdir($upload_path,0777,TRUE);
			$config['upload_path']          = './assets/asetslider/login/sendergrup/';
			//$this->_check_file_upload_path($config['upload_path']);
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10024;
		
			$config['max_width']            = 6000; // 6000px you can set the value you want
			$config['max_height']           = 6000; // 6000px
			//$config['encrypt_name']         = TRUE;// file name will be encrypted
			$param = array(
				
				'foto' => $_FILES["changeprof"]["name"],
				
			);
			$this->db->set($param);
		$this->db->where('id_emp', $iduserlogin );
		$this->db->update('employee');
			
				$this->load->library('upload', $config);
		 
				if ( ! $this->upload->do_upload('changeprof')){
					echo $this->upload->display_errors('','');
					return FALSE;
				}else{
					//var_dump($this->upload->data());
					$data = $this->upload->data();
					//$data = array('upload_data' => $this->upload->data());
					$this->session->sess_destroy();
					if($level == 'kepala_dinas'){
						echo "<script>
						alert('Berhasil Ganti Profile!!!');
						window.location.href='https://quesioner.my.id/dinas/Login';
						</script>";
					}
					else{
						echo "<script>
						alert('Berhasil Ganti Profile!!!');
						window.location.href='https://quesioner.my.id/dinas/Loginstaf';
						</script>";
					}
					

				}
			
	 
	}
	
	public function add($data)
	{
		
		//  $base64Gambar = $_FILES["foto"]["tmp_name"];
		// $Path = "assets/asetslider/login/sendergrup/";
			//$ImagePath = base_url() . $Path .  $_FILES["foto"]["name"];
			//move_uploaded_file($base64Gambar, $ImagePath);

			//mkdir($upload_path,0777,TRUE);
			$config['upload_path']          = './assets/asetslider/login/sendergrup/';
			//$this->_check_file_upload_path($config['upload_path']);
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10024;
		
			$config['max_width']            = 6000; // 6000px you can set the value you want
			$config['max_height']           = 6000; // 6000px
			//$config['encrypt_name']         = TRUE;// file name will be encrypted

	 
			

		$param = array(
			'emp_name' => $data['emp_name'],
			'emp_name_last' => $data['emp_name_last'],
			'jabatan_karyawan' => $data['jabatan_karyawan'],
			'bidang_karyawan' => $data['bidang_karyawan'],
			'phone' => $data['phone'],
			'emp_email' => $data['emp_email'],
			'jenis_kelamin' => $data['jenis_kelamin'],
			'alamat_emp' => $data['alamat_emp'],
			'username' => $data['username'],
			'password' => $data['password'],
			'level_user' => $data['jabatan_karyawan'],
			'foto' => $_FILES["foto"]["name"],
			//'foto' => $config['encrypt_name'], 
			//'foto' => $ImagePath,
			
		);
		if($this->db->insert('employee', $param)){
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('foto')){
				echo $this->upload->display_errors('','');
				return FALSE;
			}else{
				//var_dump($this->upload->data());
				$data = $this->upload->data();
				//$data = array('upload_data' => $this->upload->data());
				$this->load->view('Register', $data);
			}
		}
	}

	public function edit($data)
	{
		$param = array(
			'emp_name' => $data['emp_name'],
			'emp_name_last' => $data['emp_name_last'],
			'jabatan_karyawan' => $data['jabatan_karyawan'],
			'bidang_karyawan' => $data['bidang_karyawan'],
			'phone' => $data['phone'],
			'emp_email' => $data['emp_email'],
			'jenis_kelamin' => $data['jenis_kelamin'],
			'alamat_emp' => $data['alamat_emp'],
			'username' => $data['username'],
			'password' => $data['password'],
			'level_user' => $data['level_user'],
		);
		$this->db->set($param);
		$this->db->where('id_emp', $data['id_emp']);
		$this->db->update('employee');
	}

	public function del($id)
	{
		$this->db->where('id_emp', $id);
		$this->db->delete('employee');
	}

}