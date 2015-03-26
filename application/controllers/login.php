<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}
	
	public function auth(){
		$logintype;
		
		$this->load->model('customer_model');
		
		$login = $this->input->get_post('login');
		
		if (strpos($login, '@') !== FALSE)
    		$logintype = "email";
		else
    		$logintype = "username";
    		
		$password = $this->input->get_post('password');
		
		$client = $this->customer_model->exec_login($login,$password,$logintype);
		
		if($client){			
			session_start();	
			
			if ($login == 'admin'){
				$_SESSION["clientname"] = $client[0]->login;
				$_SESSION["clientid"] = $client[0]->id;
				$_SESSION["clientemail"] = $client[0]->email;
				
				redirect('store/index', 'refresh');	
				
			}else{
				
			    $_SESSION["clientname"] = $client[0]->first;
				$_SESSION["clientid"] = $client[0]->id;
				$_SESSION["clientemail"] = $client[0]->email;
				
			    if(isset($_SESSION["cartitems"])){
					
			    	redirect('cart/itenscart');
				
			    }else{
					
			    	redirect('c_pages/view');
				
			    }			    
				
			}			
			
			
		}
		
		
		
	}
	
	public function logout(){
		session_start();
		session_destroy();
		
		session_regenerate_id(TRUE);
		
		redirect('c_pages/view');	
	}
	

	

}