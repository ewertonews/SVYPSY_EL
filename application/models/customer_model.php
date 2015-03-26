<?php
class Customer_model extends CI_Model {
	
	function getAll()
	{  
		$query = $this->db->get('customers');
		return $query->result();
	} 
	
	
	function get($id)
	{
		// select * from campus where id = $id
		$query = $this->db->get_where('customers',array('id' => $id));
		return $query->row(0,'Customer');
	}
	
	function delete($id) {
		return $this->db->delete("customers",array('id' => $id ));
	}
	
	//function insert($first, $last, $login, $email, $password) {
	function insert($customer) {	
		return $this->db->insert("customers", array('first' => $customer->first, 'last' => $customer->last, 'login' => $customer->login, 'email' => $customer->email,'password' => $customer->password));
	}
	
	function update($customer) {
		$this->db->where('id', $customer->customer_id);
		return $this->db->update("customers", array('first' => $customer->first,'last' => $customer->last, 'password' => $customer->password));
	}	
	

	function exec_login($login, $password, $type){
		
		if($type == 'username')		
			$query = $this->db->get_where('customers',array('login' => $login, 'password' => $password));
		else 
			$query = $this->db->get_where('customers',array('email' => $login, 'password' => $password));
		
		if($query -> num_rows() == 1)
   		{
   			$query->result();   			   				
     		return $query->result();
   		}
   		else
   		{
   			echo "deu errado";
     		return false;
  		}
	}
	
}