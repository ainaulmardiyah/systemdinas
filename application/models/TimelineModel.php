<?php
class TimelineModel extends CI_Model {

	
	
	public function add($data)
	{
		
		$param = array(
			'type_notes' => $data['type_notes'],
			'time_start' => $data['start'].$data['starttype'],
			'time_end' =>  $data['end'].$data['endtype'],
			'id_agenda' => $data['id_edit'],
			'notes' =>  $data['notes'],
			'starttype' =>  $data['starttype'],
			'start' =>  $data['start'],
			'endtype' =>  $data['endtype'],
			'end' =>  $data['end'],
			
		);
		$this->db->insert('jam_agenda', $param);
	}


}