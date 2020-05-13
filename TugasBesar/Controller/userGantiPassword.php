<?
  include "../Model/connection.php";
?>

<?php
/*

    User change account Password

*/
    // check html change password empty or not
    if(isset($_POST['oldPassword']) and isset($_POST['newPassword'])){

      // initialize old & new pass from form
      $oldPass = $_POST['oldPassword'];
      $newPass = $_POST['newPassword'];

      // get self idUser
      $username = $_SESSION['username'];
      $findIdUser = "SELECT idUser FROM `User` WHERE User.userName='$username'";
      $result = $connection -> query($findIdUser);
      $rowIdUser = $result-> fetch_assoc();
      $idUser = $rowIdUser['idUser'];

      // check old pass in database
      $checkQuery = "select * from User where username='$username' and password='$oldPass'";
      $result = mysqli_query($connection, $checkQuery) or die(mysqli_error($connection));
      $count = mysqli_num_rows($result);

      // if old password right
      if($count == 1){

        $changePassQuery = "UPDATE `User` SET `password`='$newPass' WHERE idUser='$idUser'";

        // run change pass query
        if(mysqli_query($connection, $changePassQuery)){
          echo "Account password changed, Returning to home.php ";
          header("Location:http://192.168.64.2/Modul/TugasBesar/View/home.php");
        } else{
          echo "ERROR: Could not able to execute $changePassQuery. " . mysqli_error($connection);
        }


      }
      else //if old pass wrong
      {
        echo "Wrong old password, please try again ";
        // go to userGantiPassword in View AGAIN
        header("Refresh:5;Location:http://192.168.64.2/Modul/TugasBesar/View/userGantiPassword.php");

      }
    }


?>
