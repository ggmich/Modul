<?php
/*
    Project Feeds for Fundraiser
    Update HTML function from database
    Criteria: - Listed Project
              - Tambah Project
*/
    include "../Model/connection.php";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    //extractnya lewat session ID usernya dari cookie
    $username = $_SESSION['username'];

    $queryFindIdFundraiser = "select `idUser` FROM User WHERE userName = '$username';";
    $result = $connection -> query($queryFindIdFundraiser);

    $row = $result-> fetch_assoc();
    $idFundraiser = $row['idUser'];


 ?>
<tr><td><a href="../View/FundraiserNewProject.html"><img src="https://image.flaticon.com/icons/svg/32/32339.svg" height="200px" width="200" "></a></td></tr>
 <?php



 			$imageSelectQuery = " SELECT image, campaignLink, namaCampaign from campaign WHERE idFundraiser = $idFundraiser && status = '1'";
 			$result = $connection-> query($imageSelectQuery);

 			if($result-> num_rows > 0){
 				while($row = $result-> fetch_assoc()){
 					echo "<td>";
 		?>

 		<?php
 					echo "<img src='".$row['image']."' height='200px' width='200px' >";
 		?>

 		<?php
 					echo "</td><td>";
 					echo "<a href='".$row["campaignLink"]."_Fundraiser.php'>";
 					echo $row["namaCampaign"]."</a>";
 					echo "</td></tr>";
 				}
 			}
 			else{
 				echo "Belum ada project yang disetujui atau diverifikasi";
 			}

 			$connection-> close();

 		?>
