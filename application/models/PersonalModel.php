<?php
class PersonalModel extends CI_Model {
//forum group

public function maxiduser()
	{
		$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->where('chat.receive', $id_emp_ses);
		$this->db->order_by('chat.id_chat', 'ASC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}


	public function get()
	{
		$id_emp_ses = $this->session->username;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->where('sender', $id_emp_ses);
		
		//$this->db->join('employee', 'employee.id_emp = chat.sender');
		//$this->db->group_by('receive');
		//where
		
		
		$query = $this->db->get();
		return $query;
	}
	public function kounthat($idsegment)
	{
		$id_emp_ses = $this->session->username;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*, count(id_chat) as jumchat');
		$this->db->from('chat');
		$this->db->where('receive', $id_emp_ses);
		$this->db->where('sender', $idsegment);
		//$this->db->join('employee', 'employee.id_emp = chat.sender');
		//$this->db->group_by('receive');
		//where
		
		
		$query = $this->db->get();
		return $query;
	}
	public function getemployee()
	{
		$id_emp_ses = $this->session->username;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('employee');
		//$this->db->join('chat', 'employee.username = chat.sender', 'left');
		
		//$this->db->where('sender', $id_emp_ses);
		
		//$this->db->join('employee', 'employee.id_emp = chat.sender');
		$this->db->group_by('employee.id_emp');
		//where
		
		
		$query = $this->db->get();
		return $query;
	}

	public function getemployeesegent()
	{
		$getsegment=$this->uri->segment(3); 

		$id_emp_ses = $this->session->iduserlogin;
		
		
	
		$this->db->select("employee.*, count(chat.id_chat) as jumchat");
		$this->db->distinct();
		$this->db->from("employee");
		$this->db->join('chat', 'employee.id_emp = chat.sender');
		//$this->db->where('chat.balasan', $idsegment);
		$this->db->where('chat.receive', $id_emp_ses);
		$this->db->where('chat.sender', $getsegment);

		$query11 = $this->db->get_compiled_select(); 
	
	

		
		$query = $this->db->query($query11);
		//$query2 = $this->db->query($query . 'ORDER BY chat.id_chat ASC');
		//$query2 = $this->db->order_by('chat.id_chat', 'ASC');

		//$query = $this->db->get();
		return $query;
	}
public function datareceive()
	{
		$id_emp_ses = $this->session->username;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->join('employee', 'employee.id_emp = chat.receive');
		//$this->db->group_by('employee.id_emp');
		$this->db->where('chat.sender', $id_emp_ses);
		
		
		$query = $this->db->get();
		return $query;
	}
	public function datareceiveid($idsegment)
	{
		
		//$id_emp_ses = $this->session->iduserlogin;
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$id_emp_ses = $this->session->username;
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->join('employee', 'employee.id_emp = chat.sender');
		//$this->db->where('chat.sender', $id_emp_ses);
		$this->db->where('chat.sender', $idsegment);
		$this->db->group_by('employee.id_emp');
		
		$query = $this->db->get();
		return $query;
	}
	function get_compiled_select()
{
    return $this->db->_compile_select();
}

function do_reset_select()
{
    $this->db->_reset_select();
}
	public function personalreply($idsegment)
	{
		
		$id_emp_ses = $this->session->iduserlogin;
		
	
		

		$this->db->select("*");
		$this->db->distinct();
		$this->db->from("chat");
		$this->db->join('employee', 'employee.id_emp = chat.sender');
		//$this->db->where('chat.balasan', $idsegment);
		$this->db->where('chat.receive', $id_emp_ses);
		$this->db->where('chat.sender', $idsegment);
		
		$query11 = $this->db->get_compiled_select(); // It resets the query just like a get()
	
		$this->db->select("*");
		$this->db->distinct();
		$this->db->from("chat");
		$this->db->join('employee', 'employee.id_emp = chat.receive');
		//$this->db->where('chat.balasan', $idsegment);
		$this->db->where('chat.receive', $idsegment);
		$this->db->where('chat.sender', $id_emp_ses);

		$query2 = $this->db->get_compiled_select(); 
	
		$query = $this->db->query($query11." UNION ".$query2. " ORDER BY  `id_chat` ");
		//$query2 = $this->db->query($query . 'ORDER BY chat.id_chat ASC');
		//$query2 = $this->db->order_by('chat.id_chat', 'ASC');

		//$query = $this->db->get();
		return $query;
	
		
	}
	
	public function addfirstchat($id_chat_new, $pesanchat, $id_staf)
	{
		$id_emp_ses = $this->session->iduserlogin;
		$param = array(
			'judul' => $pesanchat,
			'sender' => $id_emp_ses,
			'receive' => $id_chat_new,
			'status' => 'online',
			'date_send' => date('Y-m-d'),
	
			
		);
		$this->db->insert('chat', $param);
	}
	public function add($data)
	{
		$id_emp_ses = $this->session->iduserlogin;
		$param = array(
			'balasan' => $id_emp_ses,
			'messages' => $data['messages'],
			'sender' => $id_emp_ses,
			'receive' =>$data['id_chat_r'],
			'status' => 'online',
			'date_send' => date('Y-m-d'),

			
			
			
		);
		$this->db->insert('chat', $param);
	}

}