<?php
// start session for every connection
session_start();
?>

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

//extract id terakhir
$lastIdQuery = "SELECT MAX(idTransaksi) AS 'max' FROM PencairanDana";
$extractId = $connection -> query($lastIdQuery);
$lastIdRow = $extractId -> fetch_assoc();
$lastId = $lastIdRow['max'];
if($lastId == null){
  $lastId = 1;
}
else{
  $lastId = $lastId + 1;
}



  // make sure html form is not Empty
  if(isset($_POST["jumlahPencairanDana"])){
    //extract value from formp
    $jumlahPencairanDana = $_POST["jumlahPencairanDana"];
    $idCampaign = $_SESSION["idCampaign"];

    // query for delete record in campaign table
    $query = "INSERT INTO `PencairanDana` (`idTransaksi`,`idCampaign`,`status`,`totalPencairan`)
    VALUES ('$lastId','$idCampaign','0','$jumlahPencairanDana')";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "<script type='text/javascript'>alert('Query Executed')</script>";
      header("refresh:5;url=http://192.168.64.2/Modul/TugasBesar/View/homeFundraiser.php");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }

?>
