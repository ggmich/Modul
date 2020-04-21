<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class RoleController{
	protected $db;

	public function __construct(){
		$this->db = new MySQLDB("localhost","root","","ide");
	}

	public function view_roles(){
		$result = $this->getAllUserGroup();
		return View::createView('roles.php',
			[
				"result"=> $result
			]);
	}

	public function addNewRole(){
		$group = $_POST['iGroup'];
		if (isset($group) && $group != "") {
			$group = $this->db->escapeString($group);
			$query = "INSERT INTO userGroups (name) VALUES ('$group')";
			$this->db->executeNonSelectQuery($query);
		}
	}

	public function getAllUserGroup(){
		$query = "SELECT name from userGroups";
		$query_result = $this->db->executeSelectQuery($query);
		return $query_result;
	}
}

?>