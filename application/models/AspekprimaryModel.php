<?php
class AspekprimaryModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('aspek_primary');
		
		if($id != null) {
			$this->db->where('id_aspek_primary', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'nama_aspek_primary' => $data['nama_aspek_primary'],
			
		);
		$this->db->insert('aspek_primary', $param);
	}

	public function edit($data)
	{
		$param = array(
			'nama_aspek_primary' => $data['nama_aspek_primary'],
		);
		$this->db->set($param);
		$this->db->where('id_aspek_primary', $data['id']);
		$this->db->update('aspek_primary');
	}

	public function del($id)
	{
		$this->db->where('id_aspek_primary', $id);
		$this->db->delete('aspek_primary');
	}

}