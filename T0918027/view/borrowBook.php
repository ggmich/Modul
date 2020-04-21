<?php 
	//library yang diperlukan
?>

<?php include "../layout/head.php" ?>

<p>Judul Buku:</p>
<p>Pengarang: </p>
<p>Lama Peminjaman: </p>
<form method="POST" action="../controller/services/addNewBook.php">
  <input type="number" name="lamaPinjam"> Hari<br>
  <input type="submit" value="Submit" name="newPinjam">
</form>



<?php include '../layout/footer.php'; ?>