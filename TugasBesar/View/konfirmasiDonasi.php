<?php include "../View/headerUser.html"; ?>
<?php
	// hard code for project code (idCampaign)
	$projectCode = 4;
?>

<?php
	include "../Model/connection.php";
	$imageSelectQuery = " SELECT * from campaign WHERE idCampaign = $projectCode";
	$_SESSION["idCampaign"] = $projectCode;
  $currentDonation = $_SESSION['currentDonation'];

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
    <p>Terima Kasih atas partisipasi anda, mohon transfer Rp <?php echo $currentDonation ?> ke rekening kami di <b>0000-0000-0000-0000</b></p>
    <p>Atas nama <b>togetherWeCan Bank Wombat</b></p>
    <p><b>Kirimkan bukti transfer anda ke email kami : togetherWeCan@gmail.com </b></p>
    <button onclick="backToMenu()"> Back to Menu</button>
  </article>
</section>

<script>
function backToMenu() {
  location.replace("../View/home.php");
}
</script>

</body>
</html>

<?php include "../View/footer.html";?>
