<?php
require ('connection.php');

// check html textBox empty or not
if(isset($_POST['username']) and isset($_POST['password'])){

  // initialize username & password from login form.html
  $username = $_POST['username'];
  $password = $_POST['password'];

  // check credential in database
  $checkQuery = "select * from admin where username='$username' and password='$password'";
  $result = mysqli_query($connection, $checkQuery) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if($count == 1){
    // Login Credentials verified
    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

  }else{
    // Login Credentials verified
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

  }
}
?>
