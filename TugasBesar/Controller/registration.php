<?php
/*
    Registration method
*/
include ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){

  // initialize username & password from login form.html
  $username = $_POST['username'];
  $namaLengkap = $_POST['namaLengkap'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $noHp = $_POST['noHp'];

  //extract id terakhir
  $lastIdQuery = "SELECT MAX(idUser) AS 'max' FROM User";
  $extractId = $connection -> query($lastIdQuery);
  $lastIdRow = $extractId -> fetch_assoc();
  $lastId = $lastIdRow['max'];
  if($lastId == null){
    $lastId = 1
  }
  else{
    $lastId = $lastId + 1;
  }

  // credential registration in database
  $registerQuery = "INSERT INTO `User` (`userName`, `namaLengkap`, `email`, `password`, `noHp`,`statusAdmin`) VALUES ('$username', '$namaLengkap', '$email', '$password', '$noHp','0')";

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
