<?php
class SavingjawabanModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('saving_jawaban as sv');
		$this->db->join('kuisoner as ks', "ks.id_kuisoner = sv.id_kuisoner_user", 'inner');
			$this->db->join('aspek_primary as ap', "ap.id_aspek_primary  = sv.id_aspek_user", 'inner');
				$this->db->join('poinjawaban as pj', "pj.id_poinjwb  = sv.id_jawaban_user", 'inner');
					$this->db->join('user as us', "us.id_user = sv.id_user_s", 'inner');
		if($id != null) {
			$this->db->where('id_saving', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_kuisoner_user' => $data['id_kuisoner_user'],
			'id_aspek_user' => $data['id_aspek_user'],
			'id_jawaban_user' => $data['id_jawaban_user'],
			'poin' => $data['poin'],
			'prediksi' => $data['prediksi'],
			'date_answer' => $data['date_answer'],
			'id_user_s' => $data['id_user_s'],
		);
		$this->db->insert('saving_jawaban', $param);
	}

	public function edit($data)
	{
		$param = array(
			'id_kuisoner_user' => $data['id_kuisoner_user'],
			'id_aspek_user' => $data['id_aspek_user'],
			'id_jawaban_user' => $data['id_jawaban_user'],
			'poin' => $data['poin'],
			'prediksi' => $data['prediksi'],
			'date_answer' => $data['date_answer'],
			'id_user_s' => $data['id_user_s'],
		);
		$this->db->set($param);
		$this->db->where('id_saving', $data['id']);
		$this->db->update('saving_jawaban');
	}

	public function del($id)
	{
		$this->db->where('id_saving', $id);
		$this->db->delete('saving_jawaban');
	}

}