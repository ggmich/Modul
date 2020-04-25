<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
?>
