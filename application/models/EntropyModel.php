<?php
class EntropyModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('entropy_user');
		
		if($id != null) {
			$this->db->where('id_entropy', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function validasiquestionentropy($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('entropy_user');
		$this->db->where('id_user', $id_staf);
		//	$this->db->where('id_aspek_entropy', aspek_user);
		
		$query = $this->db->get();
		return $query;
	}
	
	public function answerkompeten($iduser)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('count(id_entropy) as jumlahkompeten');
		$this->db->from('entropy_user');
		$this->db->where('prediksi_aspek', 'kompeten');
		$this->db->where('id_user', $iduser);
		
		
		$query = $this->db->get();
		return $query;
	}
	
	public function validasiperaspek($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('entropy_user');
		$this->db->join('answer_user', 'answer_user.id_aspek_answer = entropy_user.id_aspek_entropy');
		$this->db->where('answer_user.id_employee_q', $id_staf);
		$this->db->where('answer_user.id_pertanyaan', $gets);
		//	$this->db->where('id_aspek_entropy', 13);
		
		$query = $this->db->get();
		return $query;
	}
	
	public function cekdatantropy($id_staf, $idaspek)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('entropy_user.id_entropy as id_entropy_del');
		$this->db->from('entropy_user');
		//$this->db->join('answer_user', 'answer_user.id_aspek_answer = entropy_user.id_aspek_entropy');
		$this->db->where('entropy_user.id_user', $id_staf);
		$this->db->where('entropy_user.id_aspek_entropy', $idaspek);
		//	$this->db->where('id_aspek_entropy', 13);
		
		$query = $this->db->get();
		return $query;
	}
	public function deletedataredudanentropy($id_staf, $idaspek, $iddel)
	{
		$this->db->where('id_entropy', $iddel);
		$this->db->delete('entropy_user');
	}
	
	
	public function validasiperaspeklast($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('entropy_user');
		$this->db->join('answer_user', 'answer_user.id_aspek_answer = entropy_user.id_aspek_entropy');
		$this->db->where('answer_user.id_employee_q', $id_staf);
		$this->db->where('answer_user.id_pertanyaan', '39');
		//	$this->db->where('id_aspek_entropy', 13);
		
		$query = $this->db->get();
		return $query;
	}
	public function hitungaspek($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		//$this->db->select('sum(us.jumlah_jawaban_poin) as total_score, ap.nama_aspek as aspek_subject');
		$this->db->select('sum(us.jumlah_jawaban_poin) as total_score, ap.nama_aspek as aspek_subject');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		//$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
			$this->db->group_by('ap.id_aspek');
			$this->db->order_by('ap.id_aspek');
		
		
		$query = $this->db->get();
		return $query;
	}
	public function answertdkkompeten($iduser)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('count(id_entropy) as jumlahtdkkompeten');
		$this->db->from('entropy_user');
		$this->db->where('prediksi_aspek', 'tidak kompeten');
		$this->db->where('id_user', $iduser);
		
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_user' => $data['id_user'],
			'nilai_log_entropy' => $data['nilai_log_entropy'],
			'id_aspek_entropy' => $data['id_aspek_entropy'],
			'prediksi_aspek' => $data['prediksi_aspek'],
			
		);
		$this->db->insert('entropy_user', $param);
	}

	public function edit($data)
	{
		$param = array(
		
			'id_user' => $data['id_user'],
			'nilai_log_entropy' => $data['nilai_log_entropy'],
			'id_aspek_entropy' => $data['id_aspek_entropy'],
			'id_aspek_entropy' => $data['id_aspek_entropy'],
			
		
			
		);
		$this->db->set($param);
		$this->db->where('id_entropy', $data['id_entropy']);
		$this->db->update('entropy_user');
	}

	public function del($id)
	{
		$this->db->where('id_entropy', $id);
		$this->db->delete('entropy_user');
	}

}