<?php

/*
    donatur add new project method
*/
include ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['jumlahDonasi'])){

  //extractnya lewat session ID usernya dari cookie
  $username = $_SESSION['username'];
  $queryFindIdFundraiser = "SELECT idUser FROM User WHERE username = $username";
  $result = $connection -> query($queryFindIdFundraiser);
  $row = $result-> fetch_assoc();
  $idDonatur = $row['idUser'];

  // initialize jumlah donasi & Id campaign from projectYYY.php
  $jumlahDonasi = $_POST['jumlahDonasi'];
  $statAnonim = $_POST['statAnonim'];
  $date = date('Y/m/d');
  $idCampaign = $_SESSION["idCampaign"];

  // query
  $donasiQuery = "INSERT INTO `Donasi` (`idTransaksi`,`idCampaign`,`idDonatur`,`totalDonasi`,`tanggalDonasi`,`statAnonim`,`statTransaksi`)
  VALUES ('','$idCampaign','$idDonatur','$jumlahDonasi','$date','$statAnonim','')";

  // $connection variable from connection.php
  if(mysqli_query($connection, $donasiQuery)){
    echo "Records inserted successfully.";
    header("Location: ../View/konfirmasiDonasi.php");
  } else{
    echo "ERROR: Could not able to execute $donasiQuery. " . mysqli_error($connection);
  }

  // Close connection
  mysqli_close($connection);
}

?>
