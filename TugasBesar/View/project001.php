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
	<style>

	* {
		box-sizing: border-box;
	}

	body {
		font-family: AmaticSC-Regular;
	}

	/* Style the header */
	header {
		background-color: rgb(172, 213, 240);
		background-image: linear-gradient(rgb(116, 180, 223),rgb(172, 213, 240));
		padding: 45px;
		text-align: center;
		font-size: 35px;
		color: white;
	}

	/* Create two columns/boxes that floats next to each other */
	nav {
		float: left;
		width: 20%;
		padding:10px;
		height: 400px; /* only for demonstration, should be removed */
		background: #2471A3;
		font-size: 30px;
	}

	/* Style the list inside the menu */
	nav ul {
		list-style-type: none;
		padding: 0;
	}

	article {
		float: left;
		padding: 10px;
		width: 60%;
		background-color: rgb(196, 231, 255);
		height: 400px; /* only for demonstration, should be removed */
		width : 450px;
		font-size: 21px;
	}

	/* Clear floats after the columns */
	section:after {
		content: "";
		display: table;
		clear: both;
	}

	aside{
		float: right;
		padding-top: 10px;
		padding-left: 10px;
		padding-bottom: 10px;
		background-color: rgb(80, 157, 209);
		height: 400px;
		width :228.5px;
		margin-right: 0px;
		font-size: 23px;
	}

	/* Style the footer */

	/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
	@media (max-width: 600px) {
		nav, article {
			width: 100%;
			height: auto;
		}
	}

	@font-face{
		font-family : AmaticSC-Regular;
		src : url(fonts/AmaticSC-Regular.ttf);
	}

	#button{
		background-color: rgb(172, 213, 240);
		border: none;
		border-radius: 10px;
		width : 100px;
		height : 40px;
		font-family : AmaticSC-Regular;
		font-weight: bold;
		font-size: 20px;
	}

	#button1{
		background-color: rgb(172, 213, 240);
		border: none;
		border-radius: 10px;
		width : 60px;
		height : 40px;
		font-family : AmaticSC-Regular;
		font-weight: bold;
		font-size: 20px;
	}


	</style>
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

  </aside>
</section>

</body>
</html>

<?php include "../View/footer.html";?>
