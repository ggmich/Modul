<?php

/*
    fundraiser add new project method
*/
include ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){

  // registering data to Campaign atribute database
  $name = $_POST['nama'];
  $date = $_POST['date'];
  $type = $_POST['type'];
  $story = $_POST['story'];
  $ktp = $_POST['ktp'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $fundTarget = $_POST['fundTarget'];

  /*

  $idFundraiser = ? (Masukin ke tabel campaign )

  extractnya lewat session ID usernya dari cookie

  */

  // query for database
  $registerQuery = "INSERT INTO `campaign` (`idCampaign`, `namaCampaign`, `idFundraiser`, `tglMulai`, `tglSelesai`, `fundTarget`, `story`, `type`, `ktp`, `phone`, `address`)
  VALUES ('', '$name', '', '$date', '', '$fundTarget', '$story', '$type', '$ktp', '$phone', '$address')";


  // $connection variable from connection.php
  if(mysqli_query($connection, $registerQuery)){
    echo "Records inserted successfully.";
    header("Location: ../View/home.html");
  } else{
    echo "ERROR: Could not able to execute $registerQuery. " . mysqli_error($connection);
  }



  // Close connection
  mysqli_close($connection);
}

?>
