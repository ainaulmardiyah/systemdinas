<?php
class ChatModel extends CI_Model {
//forum group
	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat');
		
		if($id != null) {
			$this->db->where('id_chat', $id);
		}
		
		$query = $this->db->get();
		return $query;
	}
	public function datareceive()
	{
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->where('chat.receive', $id_emp_ses);
		
		
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'judul' => $data['judul'],
			'sender' => $data['sender'],
			'receive' => $data['receive'],
			'status' => $data['status'],
			'date_send' => $data['date_send'],
			'logo_grup' => $data['logo_grup'],

			
			
		);
		$this->db->insert('chat', $param);
	}

	public function edit($data)
	{
	
			$param = array(
			'judul' => $data['judul'],
			'sender' => $data['sender'],
			'receive' => $data['receive'],
			'status' => $data['status'],
			'date_send' => $data['date_send'],
			'logo_grup' => $data['logo_grup'],

			
		);
		$this->db->set($param);
		$this->db->where('id_chat', $data['id_chat']);
		$this->db->update('chat');
	}

	public function del($id)
	{
		$this->db->where('id_chat', $id);
		$this->db->delete('chat');
	}

}