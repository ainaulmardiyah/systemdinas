<?php
class KalkulasiModel extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('kalkulasi as kl');
		$this->db->from('kuisoner as ks', 'ks.id_kuisoner = kl.id_kuisoner_hitung');
		$this->db->from('aspek_shopee as asp', 'asp.id_aspek = ks.aspek_kategori');
		$this->db->join('aspek_primary as at', 'kl.aspek_primary = at.id_aspek_primary  ', 'inner');
		if($id != null) {
			$this->db->where('id_kalkulasi', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_kuisoner_hitung' => $data['id_kuisoner_hitung'],
			'aspek_primary' => $data['aspek_primary'],
			'hasilkalkulasi' => $data['hasilkalkulasi'],
			'status' => $data['status'],
			'date_periode' => $data['date_periode'],
			
		);
		$this->db->insert('kalkulasi', $param);
	}

	public function edit($data)
	{
		$param = array(
			'id_kuisoner_hitung' => $data['id_kuisoner_hitung'],
			'aspek_primary' => $data['aspek_primary'],
			'hasilkalkulasi' => $data['hasilkalkulasi'],
			'status' => $data['status'],
			'date_periode' => $data['date_periode'],
		);
		$this->db->set($param);
		$this->db->where('id_kalkulasi', $data['id']);
		$this->db->update('kalkulasi');
	}

	public function del($id)
	{
		$this->db->where('id_kalkulasi', $id);
		$this->db->delete('kalkulasi');
	}

}