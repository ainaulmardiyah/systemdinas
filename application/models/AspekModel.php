<?php
class AspekModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('aspek');
		
		if($id != null) {
			$this->db->where('id_aspek', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function getgrafik($id_aspek)
	{
		$level = $this->session->level;
		$bidang = $this->session->id_bidang;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		/*$this->db->select('*, sum(auw.jumlah_jawaban_poin) as total, emp.emp_name as nama_employee, emp.id_emp as id_employee');
		$this->db->from('aspek as ap');
		$this->db->join('answer_user as auw', 'auw.id_aspek_answer = ap.id_aspek');
		$this->db->join('employee as emp', 'emp.id_emp = auw.id_employee_q');
		$this->db->join('ranking_user as rank', 'emp.id_emp=rank.id_user_ranking');
		$this->db->where('auw.id_aspek_answer', $id_aspek);

		if($level == 'kepala_bidang' or $level == 'staf'){
			$this->db->where('emp.bidang_karyawan', $bidang);
			}
		$this->db->group_by('emp.id_emp',  'ASC');
		$this->db->order_by('cast(rank.jumlah_kompeten as int)', 'DESC');
		*/
		$this->db->select('*, ent.nilai_log_entropy as total, emp.emp_name as nama_employee, emp.id_emp as id_employee');
		$this->db->from('aspek as ap');
		$this->db->join('answer_user as auw', 'auw.id_aspek_answer = ap.id_aspek');
		$this->db->join('entropy_user as ent', 'ap.id_aspek=ent.id_aspek_entropy');
		$this->db->join('employee as emp', 'emp.id_emp = ent.id_user');
		$this->db->join('ranking_user as rank', 'emp.id_emp=rank.id_user_ranking');
		$this->db->where('ent.id_aspek_entropy', $id_aspek);

		if($level == 'kepala_bidang' or $level == 'staf'){
			$this->db->where('emp.bidang_karyawan', $bidang);
			}
		$this->db->group_by('emp.id_emp');
		$this->db->order_by('cast(ent.nilai_log_entropy as float)', 'DESC');
		
		$query = $this->db->get();
		return $query;
	}
	public function getgrafikaspekk($id_aspek)
	{
		$level = $this->session->level;
		$bidang = $this->session->id_bidang;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, ent.nilai_log_entropy as total, emp.emp_name as nama_employee, emp.id_emp as id_employee');
		$this->db->from('aspek as ap');
		$this->db->join('answer_user as auw', 'auw.id_aspek_answer = ap.id_aspek');
		$this->db->join('entropy_user as ent', 'ap.id_aspek=ent.id_aspek_entropy');
		$this->db->join('employee as emp', 'emp.id_emp = ent.id_user');
		$this->db->join('ranking_user as rank', 'emp.id_emp=rank.id_user_ranking');
		$this->db->where('ent.id_aspek_entropy', $id_aspek);

		if($level == 'kepala_bidang' or $level == 'staf'){
			$this->db->where('emp.bidang_karyawan', $bidang);
			}
		$this->db->group_by('emp.id_emp');
		$this->db->order_by('cast(ent.nilai_log_entropy as float)', 'DESC');
		
		$query = $this->db->get();
		return $query;
	}
	public function getnameaspek1()
	{
		$level = $this->session->level;
		$bidang = $this->session->id_bidang;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*,  sum(auw.jumlah_jawaban_poin) as total');
		$this->db->from('aspek as ap');
		$this->db->join('answer_user as auw', 'auw.id_aspek_answer = ap.id_aspek');
		$this->db->join('employee as emp', 'emp.id_emp = auw.id_employee_q');
		if($level == 'kepala_bidang' or $level == 'staf'){
		$this->db->where('emp.bidang_karyawan', $bidang);
		}
		$this->db->group_by('ap.id_aspek',  'ASC');
		
		$query = $this->db->get();
		return $query;
	}
	public function add($data)
	{
		$param = array(
			'nama_aspek' => $data['nama_aspek'],
			'date' => date('Y-m-d'),
			//'point_jumlah_jawaban_poin' => $data['nilai_min_kompeten'],
			'jumlah_pertanyaan' => $data['jumlah_pertanyaan'],
			'nilai_max_kompeten' => $data['nilai_max_kompeten'],
			'nilai_min_kompeten' => $data['nilai_min_kompeten'],
			
			
		);
		$this->db->insert('aspek', $param);
	}

	public function edit($data)
	{
		$param = array(
			'nama_aspek' => $data['nama_aspek'],
			'date' => date('Y-m-d'),
			//'point_jumlah_jawaban_poin' => $data['point_jumlah_jawaban_poin'],
			'jumlah_pertanyaan' => $data['jumlah_pertanyaan'],
			'nilai_max_kompeten' => $data['nilai_max_kompeten'],
			'nilai_min_kompeten' => $data['nilai_min_kompeten'],
			
		);
		$this->db->set($param);
		$this->db->where('id_aspek', $data['id_edit']);
		$this->db->update('aspek');
	}

	public function del($id)
	{
		$this->db->where('id_aspek', $id);
		$this->db->delete('aspek');
	}

}