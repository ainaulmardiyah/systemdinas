<?php
class RankingModel extends CI_Model {

	public function get()
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, sum(ess.nilai_log_entropy) as total_en, uss.id_user_ranking as id_user_ranking');
		$this->db->from('ranking_user as uss');
		$this->db->join('employee as emp', 'emp.id_emp=uss.id_user_ranking');
		$this->db->join('entropy_user as ess', 'ess.id_user=uss.id_user_ranking');
		$this->db->order_by('cast(uss.jumlah_kompeten as int)', 'DESC');
		$this->db->order_by('cast(uss.aspek_total as float)', 'DESC');

		$this->db->group_by('emp.id_emp');
		
		$query = $this->db->get();
		return $query;
	}
	public function getbidang($id_bdangsessioan)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('ranking_user as uss');
		$this->db->join('employee as emp', 'emp.id_emp=uss.id_user_ranking');
		$this->db->where('emp.bidang_karyawan', $id_bdangsessioan);
		
		$this->db->order_by('cast(uss.jumlah_kompeten as int)', 'DESC');
		$this->db->group_by('emp.id_emp');
		
		$query = $this->db->get();
		return $query;
	}
	public function getdetail($id_user_ranking)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('entropy_user as uss');
		
		$this->db->join('aspek as emp', 'emp.id_aspek=uss.id_aspek_entropy');
		$this->db->join('employee as ee', 'uss.id_user=ee.id_emp');
		$this->db->where('uss.id_user', $id_user_ranking);
		$this->db->order_by('emp.id_aspek', 'ASC');
		$this->db->group_by('emp.id_aspek');
		$query = $this->db->get();
		return $query;
	}
	public function getdetail2($id_user_ranking)
	{
		$this->db->select('*');
		$this->db->from('entropy_user as uss');
		
		$this->db->join('aspek as emp', 'emp.id_aspek=uss.id_aspek_entropy');
		$this->db->join('employee as ee', 'uss.id_user=ee.id_emp');
		$this->db->where('uss.id_user', $id_user_ranking);
		$this->db->order_by('emp.id_aspek', 'ASC');
		$this->db->group_by('emp.id_aspek');
		$query = $this->db->get();
		return $query;
	}
	
	public function getdetailanswer($id_user_ranking)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('answer_user as uss');
		
		$this->db->join('aspek as emp', 'emp.id_aspek=uss.id_aspek_answer');
		$this->db->join('employee as ee', 'uss.id_employee_q=ee.id_emp');
		$this->db->join('pertanyaan as pn', 'pn.id_pertanyaan=uss.id_pertanyaan');
		$this->db->join('poinjawaban as pj', 'pj.id_poinjwb =uss.id_answer_choice');
		$this->db->where('uss.id_employee_q', $id_user_ranking);
		$this->db->order_by('pn.id_pertanyaan', 'ASC');
		//$this->db->group_by('emp.id_aspek');
		$query = $this->db->get();
		return $query;
	}
	
public function rankingall($id_staf)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('ranking_user');
		$this->db->where('id_user_ranking', $id_staf);
		$this->db->group_by('id_user_ranking');
		//$this->db->order_by('uss.aspek_total', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	public function add($data)
	{
		$param = array(
			'aspek_total' => $data['aspek_total'],
			'jumlah_kompeten' => $data['jumlah_kompeten'],
			'jumlah_tdk_kompeten' => $data['jumlah_tdk_kompeten'],
			'presisi1' => $data['presisi1'],
			'presisi2' => $data['presisi2'],
			'presisi3' => $data['presisi3'],
			'presisi_user' => $data['presisi_user'],
			'recall1' => $data['recall1'],
			'recall2' => $data['recall2'],
			'recall3' => $data['recall3'],
			'recall_user' => $data['recall_user'],
			'akurasi1' => $data['akurasi1'],
			'akurasi2' => $data['akurasi2'],
			'akurasi_user' => $data['akurasi_user'],
			'id_user_ranking' => $data['id_user_ranking'],
			
		);
		$this->db->insert('ranking_user', $param);
	}

	public function edit($data)
	{
		$param = array(
			
				'aspek_total' => $data['aspek_total'],
			'jumlah_kompeten' => $data['jumlah_kompeten'],
			'jumlah_tdk_kompeten' => $data['jumlah_tdk_kompeten'],
			'presisi1' => $data['presisi1'],
			'presisi2' => $data['presisi2'],
			'presisi3' => $data['presisi3'],
			'presisi_user' => $data['presisi_user'],
			'recall1' => $data['recall1'],
			'recall2' => $data['recall2'],
			'recall3' => $data['recall3'],
			'recall_user' => $data['recall_user'],
			'akurasi1' => $data['akurasi1'],
			'akurasi2' => $data['akurasi2'],
			'akurasi_user' => $data['akurasi_user'],
			'id_user_ranking' => $data['id_user_ranking'],
		
			
		);
		$this->db->set($param);
		$this->db->where('id_ranking', $data['id_ranking']);
		$this->db->update('ranking_user');
	}

	public function del($id)
	{
		$this->db->where('id_ranking', $id);
		$this->db->delete('ranking_user');
	}

}