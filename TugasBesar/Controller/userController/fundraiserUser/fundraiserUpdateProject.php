<?php
// start session for every connection
session_start();
?>

<?php
/*
    Essential connection module for Controller Folder
*/

// query for connect to phpMyAdmin default Credentials
$connection = mysqli_connect('localhost','root','');

// if connection fail terminate
if (!$connection){

    die('Database Connection Failed' . mysqli_error($connection));
}

// connect to togetherWeCan Database in server
$select_db = mysqli_select_db($connection, 'togetherWeCan');

// if connection fail terminate
if (!$select_db){
    die('Database Selection Failed' . mysqli_error($connection));
}

?>


<?php
    if(isset($_POST['story']) and isset($_POST['image'])){

      //extract value from form
      $story = $_POST['story'];
      $image = $_POST['image'];
      $idCampaign = $_SESSION['idCampaign'];

      $query = "UPDATE `campaign` SET `story` = '$story', `image` = '$image'
      WHERE `campaign`.`idCampaign` = '$idCampaign'";

      // run $query
      if(mysqli_query($connection, $query)){
        echo "<script type='text/javascript'>alert('Data terupdate')</script>";
        header("refresh:5; url=http://192.168.64.2/Modul/TugasBesar/View/homeFundraiser.php");
      } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
      }
    }
    else if(isset($_POST['story'])){
      //extract value from form
      $story = $_POST['story'];
      $idCampaign = $_SESSION['idCampaign'];

      $query = "UPDATE `campaign`
      SET `story` = '$story'
      WHERE `campaign`.`idCampaign` = '$idCampaign'";

      // run $query
      if(mysqli_query($connection, $query)){
        echo "<script type='text/javascript'>alert('Data terupdate')</script>";
        header("refresh:5; url=http://192.168.64.2/Modul/TugasBesar/View/homeFundraiser.php");
      } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
      }
    }
    else if(isset($_POST['image'])){
      //extract value from form
      $image = $_POST['image'];
      $idCampaign = $_SESSION['idCampaign'];

      $query = "UPDATE `campaign`
      SET `image` = '$image'
      WHERE `campaign`.`idCampaign` = '$idCampaign'";

      // run $query
      if(mysqli_query($connection, $query)){
        echo "<script type='text/javascript'>alert('Data terupdate')</script>";
        header("refresh:5; url=http://192.168.64.2/Modul/TugasBesar/View/homeFundraiser.php");
      } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
      }
    }






?>
