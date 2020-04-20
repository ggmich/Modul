<?php
require "../controller/services/mysqlDB.php";
$query = "SELECT * from book";
$result = [];
$result = $db->executeSelectQuery($query);


?>

<html>
   <body>
     <h1>Perpustakaan Hore</h1>
     <button onclick="window.location.href = 'userAdd.php';">add</button>
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

   </body>

</html>
