<?php
/*
    Forget Password  method
*/
require ('../Model/connection.php');

// check html textBox empty or not

require ('../Controller/userController/userDonatur/PHPMailerAutoLoad.php');
if (isset($_POST['username'])) {


    $username = $_POST['username'];
    $sql = "select * from User where username='$username'";
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    echo $count;
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

echo "<script type='text/javascript'>alert('Sudah kami kirim link reset ke email anda')</script>";
header("Refresh:2;url=http://192.168.64.2/Modul/TugasBesar/View/");
?>
