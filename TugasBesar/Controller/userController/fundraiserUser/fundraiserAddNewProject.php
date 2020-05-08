<?php
/*
    Essential connection module for Controller Folder
*/

// query for connect to phpMyAdmin default Credentials
$connection = mysqli_connect('localhost','root','');

// if connection fail terminate
if (!$connection){

    die("Database Connection Failed" . mysqli_error($connection));
}

// connect to togetherWeCan Database in server
$select_db = mysqli_select_db($connection, 'togetherWeCan');

// if connection fail terminate
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>

<?php

/*
    fundraiser add new project method
*/


// check html textBox empty or not
if(isset($_POST['nama']) and isset($_POST['story']) and isset($_POST['image'])){

  // registering data to Campaign atribute database
  $name = $_POST['nama'];
  $date = $_POST['date'];
  $type = $_POST['type'];
  $story = $_POST['story'];
  $ktp = $_POST['ktp'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $fundTarget = $_POST['fundTarget'];
  $image = $_POST['image'];
  /*

  $idFundraiser = ? (Masukin ke tabel campaign )

  extractnya lewat session ID usernya dari cookie

  */

  // query for database
  $registerQuery = "INSERT INTO `campaign` (`idCampaign`, `namaCampaign`, `idFundraiser`, `tglMulai`, `tglSelesai`, `fundTarget`, `story`, `type`, `ktp`, `phone`, `image`, `campaignLink`, `address`)
  VALUES ('', '$name', '', '$date', '', '$fundTarget', '$story', '$type', '$ktp', '$phone', '$image', NULL, '$address')";


  // $connection variable from connection.php
  if(mysqli_query($connection, $registerQuery)){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could not able to execute $registerQuery. " . mysqli_error($connection);
  }



  // Close connection
  mysqli_close($connection);
}

?>
