<?php 
	require "process/mysqlDB.php";
	$query = "SELECT name from userGroups";
	$result = $db->executeSelectQuery($query);
?>

<?php include "layout/head.php" ?>
	<table>
		<tr>
			<th>Role</th>
		</tr>
		<?php
			foreach ($result as $key => $row) {
				echo "<tr>";
				echo "<td>".$row['name']."</td>";
				echo "</tr>";
			}
		?>
	</table>
	<hr>
	<form method="POST" action="process/addNewRole.php">
		<fieldset>
			<legend>Add New Role</legend>
			<input type="text" name="iGroup">
			<input type="submit" value="ADD" name='addNewRole'>
		</fieldset>
	</form>
<?php include "layout/foot.php" ?>