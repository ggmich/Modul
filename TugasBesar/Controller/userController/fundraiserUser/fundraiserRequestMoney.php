<?php
  include "../Model/Connection.php";

  // make sure html form is not Empty
  if(issset($_POST("jumlahPencairanDana"))){
    //extract value from form
    $jumlahPencairanDana = $_POST("jumlahPencairanDana");
    $idCampaign = $_POST("idCampaign");

    // query for delete record in campaign table
    $query = "INSERT INTO `PencairanDana` (`idTransaksi`,`idCampaign`,`status`,`totalPencairan`)
    VALUES ('','$idCampaign','','$jumlahPencairanDana')";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "<script type='text/javascript'>alert('Query Executed')</script>";
      header("Location: ../View/homeFundraiser.php");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }

?>
