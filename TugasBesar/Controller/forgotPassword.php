<?php
/*
    Forget Password  method
*/
require ('../Model/connection.php');


// check html textBox empty or not

require('PHPMailer/PHPMailerAutoload.php');
if (isset($_POST) & !empty($_POST)) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $sql = "SELECT * FROM `login` WHERE username = '$username'";
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $r = mysqli_fetch_assoc($res);
        $password = $r['password'];
        $to = $r['email'];
        $subject = "Your Recovered Password";

        $message = "Please use this password to login " . $password;
        $headers = "From : TogetherWeCan.com";
        if (mail($to, $subject, $message, $headers)) {
            echo "Your Password has been sent to your email id";
        } else {
            echo "Failed to Recover your password, try again";
        }
    } else {
        echo "User name does not exist in database";
    }
}
?>