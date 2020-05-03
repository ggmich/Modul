<?php
/*
    Registration method
*/
require ('../Model/connection.php');

// re create from connection php, BUG
$connection = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($connection, 'togetherWeCan');


// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){

  // initialize username & password from login form.html
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // credential registration in database
  $registerQuery = "INSERT INTO `User` (`userName`, `namaLengkap`, `email`, `password`, `noHp`) VALUES ('$username', '', '$email', '$password', '')
";


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
