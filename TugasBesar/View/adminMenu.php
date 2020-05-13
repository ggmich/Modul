<?php include "../View/headerAdmin.html"; ?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../View/style/adminMenu.css">
    <link rel="stylesheet" href="../View/style/footer.css">
    <title>Together We Can Admin</title>
    <h1>Admin Menu </h1>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="admin">
        <ul style="list-style: none;">
            <li><a href="http://192.168.64.2/Modul/TugasBesar/View/adminDelete.php">Delete Campaign</a></li>
            <li><a href="http://192.168.64.2/Modul/TugasBesar/View/adminVerify.php">Verifikasi Campaign</a></li>
            <li><a href="http://192.168.64.2/Modul/TugasBesar/View/adminAproveDonation.php">Verifikasi Donasi</a></li>
            <li><a href="http://192.168.64.2/Modul/TugasBesar/View/adminAproveMoney.php">Verifikasi Penarikan Dana</a></li>
        </ul>
    </div>
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

     <?php



     			$imageSelectQuery = " SELECT image, campaignLink, namaCampaign, status,idCampaign from campaign";
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
     					echo "</td>";
              echo "<td>       status: ";
              echo $row["status"];
              echo "</td></tr>";
              echo "<td>       id Campaign: ";
              echo $row["idCampaign"];
              echo "</td></tr>";
     				}
     			}
     			else{
     				echo "Belum ada pengajuan project oleh fundraiser";
     			}

     			$connection-> close();

     		?>
<?php include_once "../View/footer.html"; ?>
</body>
