<?php
/*
    Essential connection module for Controller Folder
*/
// start session for every connection
session_start();

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
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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
  $noRekening = $_POST['noRekening'];


  //extractnya lewat session ID usernya dari cookie
  $username = $_SESSION['username'];

  //extract id terakhir
  $lastIdQuery = "SELECT MAX(idCampaign) AS 'max'FROM campaign";
  $extractId = $connection -> query($lastIdQuery);
  $lastIdRow = $extractId -> fetch_assoc();
  $lastId = $lastIdRow['max'];
  if($lastId == null){
    $lastId = 1;
  }
  else{
    $lastId = $lastId + 1;
  }



  $queryFindIdFundraiser = "select `idUser` FROM User WHERE userName = '$username';";
  $result = $connection -> query($queryFindIdFundraiser);
  $row = $result-> fetch_assoc();
  $idFundraiser = $row['idUser'];

  // query for database
  $registerQuery = "INSERT INTO `campaign` (`idCampaign`, `namaCampaign`, `idFundraiser`, `tglMulai`, `tglSelesai`, `fundTarget`, `jumlahPencairanDana`, `totalDonasi`, `story`, `type`, `ktp`, `phone`, `image`, `campaignLink`, `status`, `address`,`noRekening`)
  VALUES ('$lastId', '$name', '$idFundraiser', '$date', '$date', '$fundTarget', '0', '0', '$story', '$type', '$ktp', '$phone', '$image', NULL, '0', '$address','$noRekening')";


  // $connection variable from connection.php
  if(mysqli_query($connection, $registerQuery)){
    echo "Pengajuan project telah dimasukan, harap menunggu verifikasi admin";
    header( "refresh:5; url=http://192.168.64.2/Modul/TugasBesar/View/homeFundraiser.php" );


  } else{
    echo "<p>ERROR: Could not able to execute $registerQuery." . mysqli_error($connection)."</p>";
  }



  // Close connection
  mysqli_close($connection);
}

?>
