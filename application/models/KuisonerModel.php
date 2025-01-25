<?php
class KuisonerModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('kuisoner as ks');
		$this->db->join('aspek_primary as asp', 'ks.aspek_utama = asp.id_aspek_primary');
		$this->db->join('aspek_shopee as ass', 'ks.aspek_kategori = ass.id_aspek');
		$this->db->order_by('ks.id_kuisoner ASC');
		if($id != null) {
			$this->db->where('id_kuisoner', $id);
		}
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'question' => $data['question'],
			'date' => $data['date'],
			'point_jumlah_jawaban_poin' => $data['point_jumlah_jawaban_poin'],
			'nilai_max' => $data['nilai_max'],
			'nilai_min' => $data['nilai_min'],
			'aspek_kategori' => $data['aspek_kategori'],
			'aspek_utama' => $data['aspek_utama'],
			
		);
		$this->db->insert('kuisoner', $param);
	}

	public function edit($data)
	{
		$param = array(
		'question' => $data['question'],
			'date' => $data['date'],
			'point_jumlah_jawaban_poin' => $data['point_jumlah_jawaban_poin'],
			'nilai_max' => $data['nilai_max'],
			'nilai_min' => $data['nilai_min'],
			'aspek_kategori' => $data['aspek_kategori'],
			'aspek_utama' => $data['aspek_utama'],
		);
		$this->db->set($param);
		$this->db->where('id_kuisoner', $data['id']);
		$this->db->update('kuisoner');
	}

	public function del($id)
	{
		$this->db->where('id_kuisoner', $id);
		$this->db->delete('kuisoner');
	}

}