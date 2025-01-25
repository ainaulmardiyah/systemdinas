<?php
class AspekkuisonerModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('aspek_shopee as asp');
		$this->db->join('aspek_primary as ap', 'asp.id_primary = ap.id_aspek_primary  ');
		if($id != null) {
			$this->db->where('id_aspek', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'aspek_subject' => $data['aspek_subject'],
			'aspek_desc' => $data['aspek_desc'],
			'id_primary' => $data['id_primary'],
			
		);
		$this->db->insert('aspek_shopee', $param);
	}

	public function edit($data)
	{
		$param = array(
			'aspek_subject' => $data['aspek_subject'],
			'aspek_desc' => $data['aspek_desc'],
				'id_primary' => $data['id_primary'],
		);
		$this->db->set($param);
		$this->db->where('id_aspek', $data['id']);
		$this->db->update('aspek_shopee');
	}

	public function del($id)
	{
		$this->db->where('id_aspek ', $id);
		$this->db->delete('aspek_shopee');
	}

}