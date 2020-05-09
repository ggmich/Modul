<?php

/*
    donatur add new project method
*/
include ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['jumlahDonasi'])){

  // initialize jumlah donasi from projectYYY.php
  $jumlahDonasi = $_POST['jumlahDonasi'];
  

  // credential registration in database
  $registerQuery = "INSERT INTO `User` (`userName`, `namaLengkap`, `email`, `password`, `noHp`) VALUES ('$username', '$namaLengkap', '$email', '$password', '$noHp')";

  // check credential in database
  $checkQuery = "select * from User where username='$username'";
  $result = mysqli_query($connection, $checkQuery) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if($count >= 1){
    // Login Credentials verified
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    header("Location: ../View/registration.html");

  }else{

    // $connection variable from connection.php
    if(mysqli_query($connection, $registerQuery)){
      echo "Records inserted successfully.";
      header("Location: ../View/index.php");
    } else{
      echo "ERROR: Could not able to execute $registerQuery. " . mysqli_error($connection);
    }
  }



  // Close connection
  mysqli_close($connection);
}

?>
