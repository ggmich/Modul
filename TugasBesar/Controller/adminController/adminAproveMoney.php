
<?php
  include "../Model/Connection.php";

  // make sure html form is not Empty
  if(issset($_POST("verifyId"))){
    //extract value from form
    $verifyId = $_POST("verifyId");
    $transactionId = $_POST("transactionId");

    // query for delete record in campaign table
    $query = "UPDATE `PencairanDana` SET status=`$verifyId` WHERE idTransaksi = `$transactionId`";

    // run $query
    if(mysqli_query($connection, $query)){
      echo "<script type='text/javascript'>alert('Query Executed')</script>";
      header("Location: ../View/adminAproveMoney.html");
    } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
    }

  }



?>
