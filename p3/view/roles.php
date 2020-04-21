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
<form method="POST" action="roles">
	<fieldset>
		<legend>Add New Role</legend>
		<input type="text" name="iGroup">
		<input type="submit" value="ADD" name='addNewRole'>
	</fieldset>
</form>