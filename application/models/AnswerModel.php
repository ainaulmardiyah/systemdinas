<?php
class AnswerModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('answer_user');
		
		if($id != null) {
			$this->db->where('id_answer', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}public function validasiquestion($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('answer_user');
		$this->db->where('id_pertanyaan', $gets);
		$this->db->where('id_employee_q', $id_staf);
		
		
		$query = $this->db->get();
		return $query;
	}
	public function validasiquestionmx($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('max(id_pertanyaan) as mx');
		$this->db->from('answer_user');
		//$this->db->where('id_answer', $gets);
		$this->db->where('id_employee_q', $id_staf);
		
		
		$query = $this->db->get();
		$queryr = $query->first_row();

		return $queryr;
	}
	public function validasiquestionall($gets, $id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('answer_user');
		$this->db->where('id_answer', "39");
		$this->db->where('id_employee_q', $id_staf);
	
		
		
		$query = $this->db->get();
		return $query;
	}

	public function getpertanyaanone($id_staf, $aspek_user)
	{
		
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*' );
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);

		//$this->db->limit(3); // hitung data 3 aja
		//if($id != null) {
		
		//}
		
		//$query = $this->db->get();
		$query = $this->db->get();
		//$queryr = $query->first_row();

		return $query;
		//print_r($queryr[0]->id_pertanyaan.'<br>');
		// $query[0]->id_pertanyaan;
	}

	public function answerbyiduser($id_staf, $aspek_user)
	{
		
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('sum(us.jumlah_jawaban_poin) as totalpoin');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
		//$this->db->group_by('us.id_pertanyaan');

		//$this->db->limit(3); // hitung data 3 aja
		//if($id != null) {
		
		//}
		
		$query = $this->db->get();
		return $query;
	}
	
	
	
	//for 3 data where id_aspek = $aspek_user dan id_user
	//delete data redudan
	
	public function answeraspekview($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('sum(us.jumlah_jawaban_poin) as totalpoin, ap.nama_aspek as nama_aspek');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		//$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
			$this->db->group_by('ap.id_aspek');
			$this->db->order_by('ap.id_aspek');
		//if($id != null) {
		
		//}
		
		$query = $this->db->get();
		return $query;
	}
	public function answerall($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('sum(us.jumlah_jawaban_poin) as totalpoin');
		$this->db->from('answer_user as us');
		$this->db->join('aspek as ap', 'us.id_aspek_answer = ap.id_aspek');
		//$this->db->join('answer_user as us', 'us.id_aspek_answer = ep.id_aspek_entropy');
	//
		//$this->db->where('us.id_aspek_answer', $aspek_user);
		$this->db->where('us.id_employee_q', $id_staf);
			//$this->db->group_by('ap.id_aspek');
		//if($id != null) {
		
		//}
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_aspek_answer' => $data['id_aspek_answer'],
			'id_pertanyaan' => $data['id_pertanyaan'],
			'id_answer_choice' => $data['id_answer_choice'],
			'jumlah_jawaban_poin' => $data['jumlah_jawaban_poin'],
			'id_employee_q' => $data['id_employee_q'],
			
		);
		/*$this->db->select('*');
		$this->db->from('answer_user');
		$this->db->where('id_answer', $data['id_pertanyaan']);
		$this->db->where('id_employee_q', $data['id_employee_q']);
	
*/
		
		//$validasiquestionall = $this->db->get();
		//if($validasiquestionall->result() == null){
			
		$this->db->insert('answer_user', $param);
	//	}
	}

	public function edit($data)
	{
		$param = array(
		
			'id_aspek_answer' => $data['id_aspek_answer'],
			'id_pertanyaan' => $data['id_pertanyaan'],
			'id_answer_choice' => $data['id_answer_choice'],
			'jumlah_jawaban_poin' => $data['jumlah_jawaban_poin'],
		'id_employee_q' => $data['id_employee_q'],
		
			
		);
		$this->db->set($param);
		$this->db->where('id_answer', $data['id_answer']);
		$this->db->update('answer_user');
	}

	public function del($id)
	{
		$this->db->where('id_answer', $id);
		$this->db->delete('answer_user');
	}

}