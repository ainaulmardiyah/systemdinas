<?php
class PoinjawabanModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('poinjawaban as ps');
		$this->db->join('pertanyaan as pj', 'pj.id_pertanyaan = ps.id_pertanyaan_jwb');
		$this->db->join('aspek as ap', 'ap.id_aspek = pj.id_aspek');
		
		if($id != null) {
			$this->db->where('ps.id_poinjwb', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}

public function getkuis($idpertanyaan)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('poinjawaban as ps');
		$this->db->join('pertanyaan as pj', 'pj.id_pertanyaan = ps.id_pertanyaan_jwb');
		$this->db->join('aspek as ap', 'ap.id_aspek = pj.id_aspek');
		
		//if($id != null) {
			$this->db->where('pj.id_pertanyaan', $idpertanyaan);
		//}
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_pertanyaan_jwb' => $data['id_pertanyaan_jwb'],
			'desc' => $data['desc'],
			'poin' => $data['poin'],
		
			
		);
		$this->db->insert('poinjawaban', $param);
	}

	public function edit($data)
	{
		$param = array(
			'id_pertanyaan_jwb' => $data['id_pertanyaan_jwb'],
			'desc' => $data['desc'],
			'poin' => $data['poin'],
		
			
		);
		$this->db->set($param);
		$this->db->where('id_poinjwb', $data['id_edit']);
		$this->db->update('poinjawaban');
	}

	public function del($id)
	{
		$this->db->where('id_poinjwb', $id);
		$this->db->delete('poinjawaban');
	}

}