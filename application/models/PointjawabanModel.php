<?php
class PointjawabanModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('poinjawaban as pjk');
		$this->db->join('kuisoner as ks', 'pjk.id_question = ks.id_kuisoner', 'inner');
		if($id != null) {
			$this->db->where('id_poinjwb', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_question' => $data['id_question'],
			'descjawaban' => $data['descjawaban'],
			'bobotpoin' => $data['bobotpoin'],
			
			
		);
		$this->db->insert('poinjawaban', $param);
	}

	public function edit($data)
	{
		$param = array(
			'id_question' => $data['id_question'],
			'descjawaban' => $data['descjawaban'],
			'bobotpoin' => $data['bobotpoin'],
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