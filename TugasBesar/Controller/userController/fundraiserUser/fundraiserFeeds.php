<?php
/*
    Project Feeds for Fundraiser
    Update HTML function from database
    Criteria: - Listed Project
              - Tambah Project
*/
    include "../Model/connection.php";
    //extractnya lewat session ID usernya dari cookie
    $username = $_SESSION['username'];
    $queryFindIdFundraiser = "SELECT idUser FROM User WHERE username = $username";
    $result = $connection -> query($queryFindIdFundraiser);
    $row = $result-> fetch_assoc();
    $idFundraiser = $row['idUser'];

 ?>

 <?php


 			$imageSelectQuery = " SELECT image, campaignLink, namaCampaign from campaign WHERE idFundraiser = $idFundraiser";
 			$result = $connection-> query($imageSelectQuery);

 			if($result-> num_rows > 0){
 				while($row = $result-> fetch_assoc()){
 					echo "<tr><td>";
 		?>

 		<?php
 					echo "<img src='".$row['image']."' height="100px" widht="100px">'";
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
