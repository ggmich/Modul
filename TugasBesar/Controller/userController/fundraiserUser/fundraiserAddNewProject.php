<?php 

/*
    fundraiser add new project method
*/
include ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){

  // initialize username & password from login form.html
  $username = $_POST['username'];
  $name = $_POST['nama'];
  $date = $_POST['date'];
  $type = $_POST['type'];
  $story = $_POST['story'];
  $ktp = $_POST['ktp'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $fundTarget = $_POST['fundTarget'];

  // credential registration in database

  /*
  $registerQuery = "INSERT INTO `User` (`userName`, `namaLengkap`, `email`, `password`, `noHp`) VALUES ('$username', '', '$email', '$password', '')";


  // $connection variable from connection.php
  if(mysqli_query($connection, $registerQuery)){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could not able to execute $registerQuery. " . mysqli_error($connection);
  }

	*/

  // Close connection
  mysqli_close($connection);
}

?>