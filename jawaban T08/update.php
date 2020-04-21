<?php include "layout/head.php" ?>
	<form method="POST" action="process/updateUsername.php">
		<fieldset>
			<legend>Update Username</legend>
			<table>
				<tr>
					<td>ID</td>
					<td>:</td>
					<td><input type="text" name="iID"></td>
				</tr>
				<tr>
					<td>New Username</td>
					<td>:</td>
					<td><input type="text" name="iUsername"></td>
				</tr>
			</table>
			<input type="submit" value="UPDATE" name='updateUsername'>
		</fieldset>
	</form>
	<br>
	<a href="users.php">BACK</a>
	<?php
		if (isset($_GET['userID']) && isset($_GET['username'])) {
			echo "<hr>";
			echo "Username for ID ".$_GET['userID']." is updated <br>";
			echo "New username: ".$_GET['username'];
		}
	?>
<?php include "layout/foot.php" ?>