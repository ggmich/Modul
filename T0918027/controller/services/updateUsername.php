<?php
	require "mysqlDB.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['updateUsername'])){
			$id = $_POST['iID'];
			$username = $_POST['iUsername'];

			if (isset($id) && $username != "" && $id != "") {
				$id = $db->escapeString($id);
				$username = $db->escapeString($username);
				$query = "UPDATE users SET username='$username' WHERE userID='$id'";
				$db->executeNonSelectQuery($query);
				$query = "SELECT userID, name, username from users WHERE userID='$id'";
				$result = $db->executeSelectQuery($query);
				if (count($result) == 1) {
					$userID = $result[0]['userID'];
					$username = $result[0]['username'];
					header('Location: ../update.php?userID='.$userID.'&username='.$username);
				}else{
					header('Location: ../update.php');
				}
			}
		}
	}
	header('Location: ../update.php');
	
?>
