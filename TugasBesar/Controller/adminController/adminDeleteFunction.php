<?php
  include "../Model/Connection.php";

  // make sure html form is not Empty
  if(issset($_POST("deleteId"))){
    //extract value from form
    $deleteId = $_POST("deleteId")

    // query for delete record in campaign table
    $query = "DELETE FROM `Campaign` WHERE idCampaign = $deleteId";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "<script type='text/javascript'>alert('Query Executed')</script>";
      header("Location: ../View/adminDelete.html");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }



?>
