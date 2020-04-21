<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class UserController{
	protected $db;

	public function __construct(){
		$this->db = new MySQLDB("localhost","root","","ide");
	}

	public function view_user(){
		//validate
		$name = "";
		if (isset($_GET['filter']) && $_GET['filter'] != "") {
			$name = $this->db->escapeString($_GET['filter']);
		}
		
		$result = $this->getAllUserWithName($name);
		return View::createView('users.php',
			[
				"name"=> $name,
				"result"=> $result
			]);
	}

	public function view_update($isUpdated = false){
		return View::createView('update.php',["isUpdated"=>$isUpdated]);
	}

	public function updateUsername(){
		$id = $_POST['iID'];
		$username = $_POST['iUsername'];

		if (isset($id) && $username != "" && $id != "") {
			$id = $this->db->escapeString($id);
			$username = $this->db->escapeString($username);
			$query = "UPDATE users SET username='$username' WHERE userID='$id'";
			$this->db->executeNonSelectQuery($query);
		}
	}

	public function getAllUserWithName($name){
		$query = "SELECT * from user_data";
		if ($name != "") {
			$query .= " WHERE name LIKE '%$name%'";
		}

		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value) {
			$result[] = new User($value['userID'], $value['name'], $value['role']);
		}
		return $result;
	}
}


?>