<?
  include "../Model/connection.php";
?>

<?php
/*

    User self delete account for user

*/

  // make sure button press
  if(isset($_POST['deleteButton'])){

    $username = $_SESSION['username'];
    $findIdUser = "SELECT idUser FROM `User` WHERE User.userName='$username'";
    $result = $connection -> query($findIdUser);
    $rowIdUser = $result-> fetch_assoc();
    $idUser = $rowIdUser['idUser'];


    // query for delete record in User table
    $deleteQuery = "DELETE FROM `User` WHERE `User`.`idUser` = '$idUser'";

    // run $deleteQuery
    if(mysqli_query($connection, $deleteQuery)){
      echo "Account Deleted, Returning to index.php ";
      header("Location:http://192.168.64.2/Modul/TugasBesar/View/index.php");
    } else{
      echo "ERROR: Could not able to execute $deleteQuery. " . mysqli_error($connection);
    }

  }



?>
