<?php
class Customer{
	public $cutomer_id;
	public $first;
	public $last;
	public $login;
	public $password;
	public $email;
	
	public function getCustomerId() {
		return $this->customer_id;
	}
	
	public function getFirstName() {
		return $this->first;
	}
	
	public function setFirstName($first) {
		$this->first = $first;
	}
	
	public function getLastName() {
		return $this->last;
	}
	
	public function setLastName($last) {
		$this->last = last;
	}
	
	public function getLogin() {
		return $this->login;
	}
	
	public function setLogin($login) {
		$this->login = $login;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password) {
		$this->password = $password;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = email;
	}
	
}
