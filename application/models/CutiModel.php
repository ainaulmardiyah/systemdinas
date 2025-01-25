<?php
class CutiModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');

		if($id != null) {
			$this->db->where('c.id_cuti', $id);
		}
		
		$this->db->where('c.email_status', 'inbox');
		$query = $this->db->get();
		return $query;
	}
	public function gettrash()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
		$this->db->where('c.email_status', 'trash');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getdraft()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
		$this->db->where('c.email_status', 'draft');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getsent()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
		$this->db->where('c.email_status', 'sent');
		
		
		$query = $this->db->get();
		return $query;
	}
	
	public function getstar()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
		$this->db->where('c.email_status', 'star');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getunstar()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
		$this->db->where('c.email_status','!=','star');
		
		
		$query = $this->db->get();
		return $query;
	}
	
	public function getid($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
			$this->db->where('c.id_pegawai_cuti', $id_staf);
			$this->db->where('c.star','none');
		
		$query = $this->db->get();
		return $query;
	}

	public function getidunstar($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
			$this->db->where('c.id_pegawai_cuti', $id_staf);
			$this->db->where('c.star','unstar');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getidstar($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('cuti as c');
		$this->db->join('employee as emp', 'emp.id_emp = c.id_pegawai_cuti');
		
			$this->db->where('c.id_pegawai_cuti', $id_staf);
			$this->db->where('c.star','star');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function admininbox($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'email_status' => 'inbox',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function adminsent($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'email_status' => 'sent',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function admintrash($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'email_status' => 'trash',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}public function admindraft($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'email_status' => 'draft',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function adminstar($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'email_status' => 'star',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function adminapprove($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'status' => 'approved',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function adminreject($id_star)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$param = array(
		
			'status' => 'rejected',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function stars($id_star)
	{
		$param = array(
		
			'star' => 'star',
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}
	public function labeling($id_star, $label)
	{
		$param = array(
		
			'label_mail' => $label,
		);
		$this->db->set($param);
		$this->db->where('id_cuti ', $id_star);
		$this->db->update('cuti');
	}

	public function addall($data)
	{
		$id_staf = $this->session->iduserlogin;
		$param = array(
			'subject' => $data['subject'],
			'messages' => $data['messages'],
			'tgl_start_cuti' => $data['tgl_start_cuti'],
			'tgl_end_cuti' => $data['tgl_end_cuti'],
			'id_pegawai_cuti' => $id_staf,
			'status' => 'none',
			'email_status' => 'inbox',
			'star' => 'none',
			'label_mail' => 'none',
			
			
		);
		$this->db->insert('cuti', $param);
	}

}