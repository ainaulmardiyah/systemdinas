<?php
class PertanyaanModel extends CI_Model {

	
	public function getrelasi($id)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, ps.date as tgl_pertanyaan');
		$this->db->from('pertanyaan as ps');
		$this->db->join('aspek as ap', 'ap.id_aspek = ps.id_aspek');
		$this->db->join('poinjawaban as pj', 'pj.id_pertanyaan_jwb = ps.id_pertanyaan');

			$this->db->where('pj.id_poinjwb', $id);
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getrelasijawab($id_pt)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, ps.date as tgl_pertanyaan');
		$this->db->from('pertanyaan as ps');
		$this->db->join('aspek as ap', 'ap.id_aspek = ps.id_aspek');
		$this->db->join('poinjawaban as pj', 'pj.id_pertanyaan_jwb = ps.id_pertanyaan');

			$this->db->where('ps.id_pertanyaan', $id_pt);
		
		
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('ps.*, ps.date as tgl_pertanyaan, ap.*');
		$this->db->from('pertanyaan as ps');
		$this->db->join('aspek as ap', 'ap.id_aspek = ps.id_aspek  ');
		if($id != null) {
			$this->db->where('ps.id_pertanyaan', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function deletedataredudan($id_staf, $deldata, $jumlahdel)
	{
		//$jumlahkurang = $jumlahdel-2;
		//for($i=0; $i < $jumlahkurang, $i++){
		$this->db->where('id_employee_q', $id_staf);	
		$this->db->where('id_answer', $jumlahdel);
		//$this->db->where('id_aspek_answer', $aspek_user);
		$this->db->delete('answer_user');
		//}
		
		
		
	}
	public function cekredudan($id_staf, $deldata)
	{
		
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('count(us.id_pertanyaan) as jumla_redudan, max(us.id_answer) as endredudan, min(us.id_answer) as startredudan, us.id_answer as dataid');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		//$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
		$this->db->where('us.id_pertanyaan', $deldata);
		//$this->db->group_by('us.id_pertanyaan');

		//if($id != null) {
		
		//}
		
		$query = $this->db->get();
		return $query;
		//echo $query->row();
	}
	public function cekdataid( $id_staf, $deldata)
	{
		
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('us.id_answer as dataid');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
	//	$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
		$this->db->where('us.id_pertanyaan', $deldata);
		$this->db->group_by('us.id_answer');

		//if($id != null) {
		
		//}
		
		$query = $this->db->get();
		return $query;
		//echo $query->row();
	}
	
	public function getpertanyaanaspek($idaspek)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('pertanyaan.*');
		$this->db->from('pertanyaan');
		//$this->db->join('aspek as ap', 'ap.id_aspek = ps.id_aspek  ');
		//if($id != null) {
			$this->db->where('id_aspek', $idaspek);
		//}
		
		$query = $this->db->get();
		return $query;
		//print_r($query->result());
	}
	public function maxkuisoner()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('max(id_pertanyaan) as lastquestion');
		$this->db->from('pertanyaan as ps');
		$this->db->join('aspek as ap', 'ap.id_aspek = ps.id_aspek  ');
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_aspek' => $data['id_aspek'],
			'bobot_pertanyaan' => $data['bobot_pertanyaan'],
			'desc_pertanyaan' => $data['desc_pertanyaan'],
			'date' => date('Y-m-d'),
		
			
		);
		$this->db->insert('pertanyaan', $param);
	}

	public function edit($data)
	{
		$param = array(
			'id_aspek' => $data['id_aspek'],
			'bobot_pertanyaan' => $data['bobot_pertanyaan'],
			'desc_pertanyaan' => $data['desc_pertanyaan'],
			'date' => date('Y-m-d'),
		
			
		);
		$this->db->set($param);
		$this->db->where('id_pertanyaan', $data['id_edit']);
		$this->db->update('pertanyaan');
	}

	public function del($id)
	{
		$this->db->where('id_pertanyaan', $id);
		$this->db->delete('pertanyaan');
	}

}