<?php
	include "../View/headerUser.html";
  include "../Model/connection.php";
?>

	<hr>
  <br>

	<table>
		<?php 

			$imageSelectQuery = " SELECT image, campaignLink, namaCampaign from campaign";
			$result = $connection-> query($imageSelectQuery);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>";
		?>

		<?php
					echo '<img src="data:image:base64,'.base64_encode($row['image']).'">';
		?>

		<?php			
					echo "</td><td>";
					echo "<a href='".$row["campaignLink"]."'>";
					echo $row["namaCampaign"]."</a>";
					echo "</td></tr>";
				}
			}
			else{
				echo "gagal fetching";
			}

			$connection-> close();
		?>
	</table>



<?php

	include "../View/footer.html";

?>
