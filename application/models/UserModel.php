<?php
class AgendaModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('agenda_kerja as ak');
		$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		
		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'agenda_month' => $data['agenda_month'],
			'date' => $data['date'],
			'leader' => $data['leader'],
			
			
		);
		$this->db->insert('agenda_kerja', $param);
	}

	public function edit($data)
	{
		$param = array(
		'agenda_month' => $data['agenda_month'],
			'date' => $data['date'],
			'leader' => $data['leader'],
		);
		$this->db->set($param);
		$this->db->where('id_agenda ', $data['id_agenda']);
		$this->db->update('agenda_kerja');
	}

	public function del($id)
	{
		$this->db->where('id_agenda', $id);
		$this->db->delete('agenda_kerja');
	}

}