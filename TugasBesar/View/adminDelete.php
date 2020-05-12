<?php
	include "../Model/connection.php";
	$imageSelectQuery = " SELECT * from campaign WHERE idCampaign = $projectCode";
	$_SESSION["idCampaign"] = $projectCode;

	$result = $connection-> query($imageSelectQuery);

	if($result-> num_rows > 0){
		$row = $result-> fetch_assoc();

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../View/style/projectDonasiStyle.css">
</head>

<body>

<header>
  <h2></h2>
</header>

<section>
  <nav>

  </nav>

  <article>
    <h1>Admin Delete Campaign Form</h1>
    <br>
    <hr>
    <form method="post" action="../Controller/adminController/adminDeleteFunction.php">

    	  <label id="label-1">idCampaign yang ingin dihapus</label><br><br>
        <input id="input-1" type="number" name="deleteId" required><br><br>

        <input class="button" type="submit" value="donasi"><br>


    </form>
  </article>

  <aside>


  </aside>
</section>

</body>
</html>

<?php include "../View/footer.html";?>
