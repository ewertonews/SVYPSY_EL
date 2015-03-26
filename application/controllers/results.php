<?php
class Results extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	
	public function view(){
		
		$this->load->model('record_model');
    	$results = $this->record_model->getAll();
    	$data['results']=$results;
    	$this->load->view('templates/header');
    	$this->load->view('pages/results',$data);
    	$this->load->view('templates/footer');

	}
}