<?php
/*
    Login verification method
*/
require ('../Model/connection.php');

// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['password'])){

  // initialize username & password from login form.html
  $username = $_POST['username'];
  $password = $_POST['password'];

  // check credential in database
  $checkQuery = "select * from User where username='$username' and password='$password' AND statusAdmin='1'";
  $result = mysqli_query($connection, $checkQuery) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if($count == 1){
    // Login Credentials verified
    // register session variabelnya
    $_SESSION["username"] = $username;

    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    header("Location: ../View/adminMenu.php");
    exit();


  }else{
    // Login Credentials invalid
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    header("Location:http://192.168.64.2/Modul/TugasBesar/View/adminLogin.html");
  }
}
?>
