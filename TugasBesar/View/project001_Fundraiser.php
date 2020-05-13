<?php
	// hard code for project code (idCampaign)
	$projectCode = 1;
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
            <input type="text" id="gambarCampaign" name="image">
          <br>
            <input class="button" type="submit" value="save">

        </fieldset>

      </div>

    </div>
  </form>
	<button id="button" onclick="location.href='../Controller/printLaporan.php';">Print laporan</button>
  <button onclick="toRequestMoney()">Request Money </button>
  <button onclick="backToMenu()">Back to menu</button>

  <script>
  function toRequestMoney() {
    location.replace("../View/project001_Fundraiser_RequestMoney.php");
  }

  function backToMenu() {
    location.replace("../View/homeFundraiser.php");
  }
  </script>
</body>

</html>
