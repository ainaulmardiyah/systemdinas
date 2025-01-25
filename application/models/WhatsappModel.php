<?php
class WhatsappModel extends CI_Model {
//forum group
	public function maxiduser()
	{
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('bidang_karyawan');
		//$this->db->where('whatsapp.receive', $id_emp_ses);
		$this->db->order_by('bidang_karyawan.id_bidang', 'ASC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
public function datareceive()
	{
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('bidang_karyawan');
		//$this->db->where('whatsapp.receive', $id_emp_ses);
		$this->db->order_by("bidang_karyawan.id_bidang", "ASC");
		
		$query = $this->db->get();
		return $query;
	}
	public function datareceiveid($idsegment)
	{
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, count(whatsapp_reply.id_whatsapp_r) as jumchat');
		$this->db->from('bidang_karyawan');
		$this->db->join('whatsapp_reply', 'bidang_karyawan.id_bidang = whatsapp_reply.id_whatsapp_r');
		$this->db->join('employee', 'employee.id_emp = whatsapp_reply.sender_reply');
		
		//$this->db->where('whatsapp.receive', $id_emp_ses);
		$this->db->where('whatsapp_reply.id_whatsapp_r', $idsegment);
		$this->db->order_by("bidang_karyawan.id_bidang", "asc");
		
		$query = $this->db->get();
		return $query;
	}
	
	public function whatsappreply($idsegment)
	{
		
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		
		$this->db->select('*, employee.username as userlog');
		$this->db->from('whatsapp_reply');
		$this->db->join('employee', 'employee.id_emp = whatsapp_reply.sender_reply');
		//$this->db->where('chat_reply.receive', $id_emp_ses);
		$this->db->where('whatsapp_reply.id_whatsapp_r', $idsegment);
		$this->db->group_by('whatsapp_reply.id_whatsapp_reply');
		$this->db->order_by('whatsapp_reply.date_reply ASC');
		//$this->db->limit(5);
		//$this->db->get_compiled_select()
		//$this->db->get();
		/*$subQuery = $this->db->get_compiled_select();
		//$this->db->_reset_select();
		//$this->db->last_query();
		$this->db->reset_query();
		$this->db->select('*');
		$this->db->from("{$subQuery} AS table");
		$this->db->order_by('id_chat_reply', 'ASC');
		//$this->db->offset(4);
		*/
		$query = $this->db->get();


		return $query;
		
	
	}
	public function add($data)
	{
		$id_emp_ses = $this->session->iduserlogin;
		$param = array(
			'id_whatsapp_r' => $data['id_whatsapp_r'],
			'messages' => $data['messages'],
				'sender_reply' => $id_emp_ses,
			'date_reply' => date('Y-m-d'),
			
		);
		$this->db->insert('whatsapp_reply', $param);
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
		$this->db->where('id_whatsapp', $data['id_whatsapp']);
		$this->db->update('whatsapp');
	}

	public function del($id)
	{
		$this->db->where('id_whatsapp', $id);
		$this->db->delete('whatsapp');
	}

}