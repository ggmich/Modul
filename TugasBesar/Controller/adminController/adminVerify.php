<?php
  include "../Model/Connection.php";

  // make sure html form is not Empty
  if(issset($_POST("verifyId"))){
    //extract value from form
    $verifyId = $_POST("verifyId")

    // query for delete record in campaign table
    $query = "UPDATE `Campaign` SET verifikasi=`TRUE` WHERE idCampaign = `$verifyId`";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "<script type='text/javascript'>alert('Query Executed')</script>";
      header("Location: ../View/adminDelete.html");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }



?>
