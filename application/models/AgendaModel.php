<?php
class AgendaModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('agenda_kerja as ak');
		$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
	//	$this->db->where("a")
		if($id != null) {
			$this->db->where('ak.id_agenda', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function getrelasitime($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('jam_agenda');
		//$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		//$this->db->join('jam_agenda as jam', 'jam.id_jam  = ak.id_agenda');
		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		$this->db->group_by('jam_agenda.id_jam');
		$this->db->where('endtype', 'am');
		$query = $this->db->get();
		return $query;
	}
	public function getrelasitimepm($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('jam_agenda');
		//$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		//$this->db->join('jam_agenda as jam', 'jam.id_jam  = ak.id_agenda');
		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		$this->db->group_by('jam_agenda.id_jam');
		$this->db->where('endtype', 'pm');
		$query = $this->db->get();
		return $query;
	}
	public function getkalender($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select("*,  DATE_FORMAT(ak.`Date`,'%y-%m-%d') tgl_kalender, DATE_FORMAT(ak.`Date`,'%d') as harinow, DATE_FORMAT(ak.`Date`,'%m') as bulanow");
		$this->db->from('agenda_kerja as ak');
		$this->db->where("date_format(ak.`Date`, '%Y-%m') = date_format(now(), '%Y-%m')");
		$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		$this->db->order_by("date_format(ak.`Date`, '%d')");
		
		
		$query = $this->db->get();
		return $query;
	}
	public function gettoday($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select("*,  DATE_FORMAT(ak.`Date`,'%y-%m-%d') tgl_kalender, DATE_FORMAT(ak.`Date`,'%d') as harinow, DATE_FORMAT(ak.`Date`,'%m') as bulanow");
		$this->db->from('jam_agenda as jam');
		$this->db->join('agenda_kerja as ak', 'jam.id_agenda  = ak.id_agenda');
		//$this->db->where("date_format(ak.`Date`, '%d') = date_format(now(), '%d')");
		$this->db->where("date_format(ak.`Date`, '%d-%m-%y') = date_format(now(), '%d-%m-%y')");
		$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		$this->db->order_by("UNIX_TIMESTAMP(jam.time_start)", 'asc');
		$this->db->where("jam.endtype",'am');
		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function gettodaypm($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select("*,  DATE_FORMAT(ak.`Date`,'%y-%m-%d') tgl_kalender, DATE_FORMAT(ak.`Date`,'%d') as harinow, DATE_FORMAT(ak.`Date`,'%m') as bulanow");
		$this->db->from('jam_agenda as jam');
		$this->db->join('agenda_kerja as ak', 'jam.id_agenda  = ak.id_agenda');
		//$this->db->where("date_format(ak.`Date`, '%d') = date_format(now(), '%d')");
		$this->db->where("date_format(ak.`Date`, '%d-%m-%y') = date_format(now(), '%d-%m-%y')");
		$this->db->join('employee as emp', 'emp.id_emp  = ak.leader');
		$this->db->order_by("UNIX_TIMESTAMP(jam.time_start)", 'desc');
		$this->db->where("jam.endtype",'pm');

		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function gettomorow($id = null)
	{
		//$tomorrow = new DateTime('tomorrow');

		// e.g. echo 2010-10-13
		$tomorrow = strtotime("+1 day");
		//$BULAN2 = date('d, F, Y', strtotime($te));
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select("*,  DATE_FORMAT(ak.`Date`,'%y-%m-%d') tgl_kalender, DATE_FORMAT(ak.`Date`,'%d') as harinow, DATE_FORMAT(ak.`Date`,'%m') as bulanow");
		$this->db->from('jam_agenda as jam');
		$this->db->join('agenda_kerja as ak', 'jam.id_agenda  = ak.id_agenda');
		$this->db->where("date_format(ak.`Date`, '%d-%m-%y') = DATE_FORMAT(NOW() + INTERVAL 1 DAY, '%d-%m-%y')");
		$this->db->where("jam.endtype", 'am');
		$this->db->order_by("UNIX_TIMESTAMP(jam.time_start)", 'asc');

		if($id != null) {
			$this->db->where('id_agenda', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function gettomorowpm($id = null)
	{
		//$tomorrow = new DateTime('tomorrow');

		// e.g. echo 2010-10-13
		$tomorrow = strtotime("+1 day");
		//$BULAN2 = date('d, F, Y', strtotime($te));
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select("*,  DATE_FORMAT(ak.`Date`,'%y-%m-%d') tgl_kalender, DATE_FORMAT(ak.`Date`,'%d') as harinow, DATE_FORMAT(ak.`Date`,'%m') as bulanow");
		$this->db->from('jam_agenda as jam');
		$this->db->join('agenda_kerja as ak', 'jam.id_agenda  = ak.id_agenda');
		$this->db->where("date_format(ak.`Date`, '%d-%m-%y') = DATE_FORMAT(NOW() + INTERVAL 1 DAY, '%d-%m-%y')");
		$this->db->where("jam.endtype", 'pm');
		$this->db->order_by("UNIX_TIMESTAMP(jam.time_start)", 'asc');

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
		$this->db->where('id_agenda ', $data['id_edit']);
		$this->db->update('agenda_kerja');
	}

	public function del($id)
	{
		$this->db->where('id_agenda', $id);
		$this->db->delete('agenda_kerja');
	}

}