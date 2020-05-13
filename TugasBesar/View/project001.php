<?php include "../View/headerUser.html"; ?>
<?php
	// hard code for project code (idCampaign)
	$projectCode = 1;
?>

<?php
	include "../Model/connection.php";
	$imageSelectQuery = " SELECT * from campaign WHERE idCampaign = $projectCode";
	$_SESSION["idCampaign"] = $projectCode;

	$result = $connection-> query($imageSelectQuery);

	if($result-> num_rows > 0){
		$row = $result-> fetch_assoc();

?>

<head>
	<link rel="stylesheet" type="text/css" href="../View/style/projectDonasiStyle.css">
</head>

<body>

<header>
  <h2></h2>
</header>

<section>
  <nav>
    <ul>
      <li><?php echo "<img src='".$row['image']."' height='200px' width='200px' >"; ?></li>

      <li><h1> <?php echo $row["namaCampaign"]; ?> </h1></li>

    </ul>
  </nav>

  <article>
    <h1><?php echo $row["namaCampaign"]; ?></h1>
    <p><?php echo $row["story"]; } ?></p>
    <br>
    <hr>
    <form method="post" action="../Controller/userController/userDonatur/projectDonasi.php">

    	  <label id="label-1">Jumlah Donasi Anda</label><br><br>
          <input id="input-1" type="text" name="jumlahDonasi" required><br><br>
					<input type="radio" name="statAnonim" value="Anonim">Anonim
					<input type="radio" name="statAnonim" value="Tidak Anonim">Tidak Anonim<br><Br>
          <input id="button1" type="submit" value="donasi"><br>


    </form>
  </article>
  <aside>
  	<fieldset>
          <legend>Target Donasi</legend>
					<h4> <?php echo "Rp ".$row["fundTarget"].",00"; ?> </h4>
					<fieldset>

						<legend>Dana Terkumpul</legend>
							<h4> <?php echo "Rp ".$row["totalDonasi"].",00"; ?> </h4>
          </fieldset>
    </fieldset>
    <br>
    <button id="button" onclick="location.href='../Controller/printLaporan.php';">Print laporan</button>
  </aside>
</section>

</body>
</html>

<?php include "../View/footer.html";?>
