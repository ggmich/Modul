<?php

/*
    donatur add new project method
*/
session_start();
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
// check html textBox empty or not
if(isset($_POST['jumlahDonasi'])){

  //extractnya lewat session ID usernya dari cookie
  $username = $_SESSION['username'];
  $queryFindIdFundraiser = "select * from User where username = '$username'";
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
  VALUES ('1','$idCampaign','$idDonatur','$jumlahDonasi','$date','$statAnonim','0')";

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
