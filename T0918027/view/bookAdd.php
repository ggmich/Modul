<?php 
	//library yang diperlukan
?>

<?php include "../layout/head.php" ?>

<form method="POST" action="../controller/services/addNewBook.php">
  <label for="judulBox">Judul Buku:</label>
  <br>
  <input type="text" name="judulBox">
  <br>
  <label for="pengarangBox">Pengarang:</label>
  <br>
  <input type="text" name="pengarangBox">
  <br>
  <input type="submit" value="Submit" name="newBook">
</form>

<?php include '../layout/footer.php'; ?>

