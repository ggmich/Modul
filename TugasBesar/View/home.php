<?php
	include "../View/headerUser.html";
  include "../Model/connection.php";
?>

	<hr>
  <br>

	<table>
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


<?php

	include "../View/footer.html";

?>
