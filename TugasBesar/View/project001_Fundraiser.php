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

  <form method="post" action="../Controller/userController/fundraiserUser/fundraiserUpdateProject.php">
    <div class="main">

      <div class="input">

        <fieldset>
          <legend>Campaign Information Edit</legend>
          <table id="campaignDetails"></table>

          <br>
            <td><label>Keterangan : </label></td>
            <td><input type="text" id="keterangan" name="story"></td>
          </tr>
          <br>
            <label for="gambarCampaign">Tambahkan Link URL gambar untuk lebih meyakinkan para donatur</label>
          <br>
            <input type="url" id="gambarCampaign" name="image">
          <br>
            <input class="button" type="submit" value="save">

        </fieldset>

      </div>

    </div>
  </form>
</body>

</html>
