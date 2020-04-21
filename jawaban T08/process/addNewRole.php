<?php
	require "mysqlDB.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['addNewRole'])) {
			$group = $_POST['iGroup'];
			if (isset($group) && $group != "") {
				$group = $db->escapeString($group);
				$query = "INSERT INTO userGroups (name) VALUES ('$group')";
				$db->executeNonSelectQuery($query);
			}
			header('Location: ../userGroup.php');
		}
	}
	
?>
