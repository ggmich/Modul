<?php

class User{
	protected $userID;
	protected $name;
	protected $role;

	public function __construct($userID,$name,$role){
		$this->userID = $userID;
		$this->name = $name;
		$this->role = $role;
	}

	public function getUserID(){
		return $this->userID;
	}

	public function getName(){
		return $this->name;
	}

	public function getRole(){
		return $this->role;
	}
}


?>