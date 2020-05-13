<?
  include "../Model/connection.php";
?>

<?php
/*

    User change account status

*/

  // make sure button press
  if(isset($_POST['saveButton'])){

    // extract from textbox / radiobutton / etc name = "status"
    $statusAkun = $_POST['status'];

    // register current account status
    $_SESSION["statusAkun"] = "$statusAkun";

    // get self idUser
    $username = $_SESSION['username'];
    $findIdUser = "SELECT idUser FROM `User` WHERE User.userName='$username'";
    $result = $connection -> query($findIdUser);
    $rowIdUser = $result-> fetch_assoc();
    $idUser = $row['idUser'];


    // query for change record in User table
    $statusQuery = "UPDATE `User` SET `statusAkun`='$statusAkun' WHERE id='$idUser'";

    // run $status query
    if(mysqli_query($connection, $statusQuery)){
      echo "Account status Changed, Returning to home.php ";
      header("Refresh:5;Location:http://192.168.64.2/Modul/TugasBesar/View/home.php");
    } else{
      echo "ERROR: Could not able to execute $statusQuery. " . mysqli_error($connection);
    }

  }



?>
