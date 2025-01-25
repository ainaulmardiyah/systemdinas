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

	  public function getChartData_aspek(){	
		$query = $this->db->query('SELECT *, COUNT(*) as poin FROM  saving_jawaban GROUP BY id_aspek_user');
		return $query;
    }
	
	public function getChartData_userid(){	
		$query = $this->db->query('SELECT *, COUNT(*) as poin FROM saving_jawaban GROUP BY id_user_s');
		return $query;
    }
	public function getname(){
		
		//$query = $this->db->query("SELECT * FROM program_studi WHERE ID_PRODI='$id'");
		//return $query;
		
		$this->db->select('*');
		$this->db->from('aspek_primary');
		
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

}