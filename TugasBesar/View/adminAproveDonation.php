
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
    <form method="post" action="../Controller/adminController/adminAproveDonation.php">

    	  <label id="label-1">idTransaksi donasi yang ingin diverfikasi</label><br><br>
        <input id="input-1" type="number" name="transactionId" required><br><br>
				<label id="label-1">Masukan status(1 = diterima, -1 = ditolak)</label><br><br>
        <input id="input-1" type="number" name="verifyId" required><br><br>

        <input class="button" type="submit" value="donasi"><br>


    </form>
  </article>

  <aside>


  </aside>
</section>

</body>
</html>
