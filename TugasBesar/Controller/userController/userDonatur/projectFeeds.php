<?php
/*
    Project Feeds for donatur
    Update HTML function from database
    Criteria: - Listed Project
*/
    include "../Model/connection.php";
 ?>

<?php

			$imageSelectQuery = " SELECT image, campaignLink, namaCampaign from campaign WHERE status='1'";
			$result = $connection-> query($imageSelectQuery);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>";
		?>

		<?php

          echo "<img src='".$row['image']."' height='200px' width='200px' >";
		?>

		<?php
					echo "</td><td>";
					echo "<a href='".$row["campaignLink"].".php'>";
					echo $row["namaCampaign"]."</a>";
					echo "</td></tr>";
				}
			}
			else{
				echo "gagal fetching";
			}

			$connection-> close();
		?>
