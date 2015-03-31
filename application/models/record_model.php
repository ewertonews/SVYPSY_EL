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
	
	function getSubjectId(){
		$query = $this->db->query('select * from subject_ids order by subject_id desc limit 0,1');
		return $query->result()[0];
	}
	
	function newSubId($id){
		return $this->db->insert("subject_ids", array('subject_id' => $id));
	}
}