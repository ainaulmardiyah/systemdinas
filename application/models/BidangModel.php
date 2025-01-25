<?php
class BidangModel extends CI_Model {

	public function getnamabidang()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('bidang_karyawan');
		//$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		
	
		
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('bidang_karyawan');
		if($id != null){
		$this->db->where('id_bidang', $id);
		}
	
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			//'id_aspek' => $data['id_aspek'],
			'nama_bidang' => $data['nama_bidang'],
			'keterangan' => $data['keterangan'],
	
		
			
		);
		$this->db->insert('bidang_karyawan', $param);
	}

	public function edit($data)
	{
		$param = array(
			'nama_bidang' => $data['nama_bidang'],
			'keterangan' => $data['keterangan'],
	
		
			
		);
		$this->db->set($param);
		$this->db->where('id_bidang', $data['id_edit']);
		$this->db->update('bidang_karyawan');
	}

	public function del($id)
	{
		$this->db->where('id_bidang', $id);
		$this->db->delete('bidang_karyawan');
	}

}

	
