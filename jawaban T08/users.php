<?php 
	require "process/mysqlDB.php";
	$query = "SELECT * from user_data";
	
	//filter
	$name = "";
	if (isset($_GET['filter'])) {
		$name = $_GET['filter'];
		if (isset($name) && $name != "") {
			$name = $db->escapeString($name);
			$query .= " WHERE name LIKE '%$name%'";
		}
	}
	
	$result = $db->executeSelectQuery($query);
?>
<?php include "layout/head.php" ?>
	<form method="GET" action="users.php">
		<fieldset>
			<legend>Search by Name</legend>
			<input type="text" name="filter" value="<?php echo $name; ?>">
			<input type="submit" value="SEARCH">
		</fieldset>
	</form>
	<br>
	<a href="update.php">UPDATE</a>
	<hr>
	<?php include "pagination.php" ?>
	<table>
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Role</th>
		</tr>
		<?php
			foreach ($result as $key => $row) {
				echo "<tr>";
				echo "<td>".$row['userID']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['role']."</td>";
				echo "</tr>";
			}
		?>
	</table>
	
<?php include "layout/foot.php" ?>