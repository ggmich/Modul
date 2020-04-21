<?php

class User{
	protected $userID;
	protected $name;

	public function __construct($userID,$name){
		$this->userID = $userID;
		$this->name = $name;
	}

	public function getUserID(){
		return $this->userID;
	}

	public function getName(){
		return $this->name;
	}


}


?>