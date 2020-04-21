<?php 
	function delete($id){
		$queryDel = "DELETE FROM book WHERE book_id = $id";
    	$db->executeNonSelectQuery($queryDel);
	?>
	}

?>
<button value="$row['book_id']">Delete</button>