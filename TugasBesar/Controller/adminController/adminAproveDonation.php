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


  // make sure html form is not Empty
  if(isset($_POST['verifyId'])){
    //extract value from form
    $verifyId = $_POST['verifyId'];
    $transactionId = $_POST['transactionId'];

    // query for delete record in campaign table
    $query = "UPDATE `Donasi` SET statTransaksi='$verifyId' WHERE idTransaksi = '$transactionId'";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "Query Executed";
      header("url:http://192.168.64.2/Modul/TugasBesar/View/adminMenu.php");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }



?>
