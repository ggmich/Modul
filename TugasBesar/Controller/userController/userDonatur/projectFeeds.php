<?php
/*
    Project Feeds for donatur
    Update HTML function from database
    Criteria: - Listed Project              
*/
    include "../Model/connection.php";
 ?>

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