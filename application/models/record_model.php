<?php
class Record_model extends CI_Model {
	
	function getAll()
	{  
		$query = $this->db->get('survey_results');
		return $query->result();
	} 

	
	//function insert($first, $last, $login, $email, $password) {
	function insert($record) {	
		return $this->db->insert("survey_results", array('block_number' => $record->block_number, 'item_title' => $record->item_title, 'answer_q1' => $record->answer_q1, 'answer_q2' => $record->answer_q2, 'category'=>$record->category, 'subject_id'=>$record->subject_id,'age_info'=>$record->ageinfo,'school_info'=>$record->schoolinfo ));
	}
	
	function getSubjectId(){
		$this->db->from("subject_ids");
		$this->db->order_by("subject_id", "desc");
		$this->db->limit(1);
		$query = $this->db->get();	
		print_r($query->result_array());
		return $query->result_array();
	}
	
	function newSubId(){
		$today = date("Y/m/d");
		$this->db->insert("subject_ids", array('date'=>$today));
		return $this->db->insert_id();
	}
}