<?php
class ChatreplyModel extends CI_Model {
//forum group
	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat_reply');
		
		if($id != null) {
			$this->db->where('id_chat_reply', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'id_chat_r' => $data['id_chat_r'],
			'messages' => $data['messages'],
			'sender_reply' => $data['sender_reply'],
			'date_reply' => $data['date_reply'],
			'foto' => $data['foto'],
			
		);
		$this->db->insert('chat_reply', $param);
	}

	public function edit($data)
	{
		$param = array(
			param = array(
			'id_chat_r' => $data['id_chat_r'],
			'messages' => $data['messages'],
			'sender_reply' => $data['sender_reply'],
			'date_reply' => $data['date_reply'],
			'foto' => $data['foto'],

			
		);
		$this->db->set($param);
		$this->db->where('id_chat_reply', $data['id_chat_reply']);
		$this->db->update('chat_reply');
	}

	public function del($id)
	{
		$this->db->where('id_chat_reply', $id);
		$this->db->delete('chat_reply');
	}

}