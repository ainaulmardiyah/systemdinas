<?php
class WhatsappreplyModel extends CI_Model {
//forum group
	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('whatsapp_reply');
		
		if($id != null) {
			$this->db->where('id_whatsapp_reply', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_whatsapp_r' => $data['id_whatsapp_r'],
			'messages' => $data['messages'],
			'sender_reply' => $data['sender_reply'],
			'date_reply' => $data['date_reply'],
			'foto' => $data['foto'],
			
		);
		$this->db->insert('whatsapp_reply', $param);
	}

	public function edit($data)
	{
		$param = array(
			param = array(
			'judul' => $data['judul'],
			'sender' => $data['sender'],
			'receive' => $data['receive'],
			'status' => $data['status'],
			'date_send' => $data['date_send'],
			'logo_grup' => $data['logo_grup'],

			
		);
		$this->db->set($param);
		$this->db->where('id_whatsapp_reply', $data['id_whatsapp_reply']);
		$this->db->update('whatsapp_reply');
	}

	public function del($id)
	{
		$this->db->where('id_whatsapp_reply', $id);
		$this->db->delete('whatsapp_reply');
	}

}