<?php
class Record_model extends CI_Model {
	
	function getAll()
	{  
		$query = $this->db->get('survey_results');
		return $query->result();
	} 

	
	//function insert($first, $last, $login, $email, $password) {
	function insert($record) {	
		return $this->db->insert("survey_results", array('block_number' => $record->block_number, 'item_title' => $record->item_title, 'answer_q1' => $record->answer_q1, 'answer_q2' => $record->answer_q2));
	}
}