<?php include "../View/headerUser.html"; ?>
<?php
	// hard code for project code (idCampaign)
	$projectCode = 1;
?>

<?php 
	include "../Model/connection.php";
	$imageSelectQuery = " SELECT * from campaign WHERE idCampaign = $projectCode";
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
      <li><img src="https://cdn.pixabay.com/photo/2016/02/21/12/54/wallpaper-1213528_960_720.png" height="200px" width="200px"></li>

      <li><h1> <?php echo $row["namaCampaign"]; ?> </h1></li>

    </ul>
  </nav>
  
  <article>
    <h1><?php echo $row["namaCampaign"]; ?></h1>
    <p><?php echo $row["story"]; } ?></p>
    <br>
    <hr>
    <form method="post" action="../Controller/..........">

    	  <label id="label-1">Jumlah Donasi Anda</label><br><br>
          <input id="input-1" type="text" name="jumlahDonasi" required><br><br>
          <input class="button" type="submit" value="donasi">

    </form>
  </article>

  <aside>
  	<fieldset>
          <legend>Total Dana</legend>
  	</fieldset>
  	<?php 

  		// MASUKIN PHP Donasi dana disini

  	?>
  	
  </aside>
</section>

</body>
</html>

<?php include "../View/footer.html";?>