<?php
	require "mysqlDB.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['newBook'])) {
			$group = $_POST['judulBox'];
			$group2 = $_POST['pengarangBox'];
			if (isset($group) && $group != "" && isset($group2) && $group2 != "") {
				$group = $db->escapeString($group);
				$group2 = $db->escapeString($group2);
				$query = "INSERT INTO book (name,author) VALUES ('$group', '$group2')";
				$db->executeNonSelectQuery($query);
				header('Location: http://localhost/ModulUnpar/T0918027/view/');
			}
			header('Location: http://localhost/ModulUnpar/T0918027/view/');
		}
	}
	
?>
