
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
    <h1>Admin Pencairan Dana Form</h1>
    <br>
    <hr>
    <form method="post" action="../Controller/adminController/adminAproveMoney.php">

    	  <label id="label-1">idTransaksi permohonan pencairan yang ingin disetujui</label><br><br>
        <input id="input-1" type="number" name="verifyId" required><br><br>
				<label id="label-1">status permohonan (1 = terima, -1 = tolak)</label><br><br>
				<input id="input-1" type="number" name="transactionId" required><br><br>

        <input class="button" type="submit" value="Verifikasi"><br>


    </form>
  </article>

  <aside>


  </aside>
</section>

</body>
</html>
