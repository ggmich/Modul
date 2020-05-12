<?php
	// hard code for project code (idCampaign)
	$projectCode = 4;
  $_SESSION["idCampaign"] = $projectCode;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>Fundraiser - new project</title>

  <link rel="stylesheet" href="../View/style/fundraiserNewProject.css">
  <link rel="stylesheet" href="../View/style/defaultButton.css">



</head>

<body style="background-image : url('style/fund.png')">

  <form method="post" action="../Controller/userController/fundraiserUser/fundraiserRequestMoney.php">
    <div class="main">

      <div class="input">

        <fieldset>
          <legend>Request Money</legend>
          <table id="campaignDetails"></table>

          <br>
            <td><label>Jumlah Uang : </label></td>
            <td><input type="text" id="keterangan" name="jumlahPencairanDana"></td>
          </tr>
          <br>
            <input class="button" type="submit" value="save">

        </fieldset>

      </div>

    </div>
  </form>
	

  <button onclick="backToMenu()">Back to menu</button>

  <script>
  function backToMenu() {
    location.replace("../View/homeFundraiser.php");
  }
  </script>
</body>

</html>
