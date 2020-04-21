<?php
    require "../controller/services/mysqlDB.php";
    $query = "SELECT * from book";
    $query2 = "SELECT return_datetime from rent";
    $result = $db->executeSelectQuery($query);
    $result2 = $db->executeSelectQuery($query2);
    function delete($id){
        $queryDel = "DELETE FROM book WHERE book_id = $id";
        $db->executeNonSelectQuery($queryDel);
    ?>
    }
?>


<?php include "../layout/head.php" ?>
    
     <button onclick="window.location.href = 'bookAdd.php';">add</button>
     <table>
    		<tr>
    			<th>No</th>
    			<th>Nama</th>
    			<th>Pengarang</th>
                <th>Status</th>
                <th>Aksi</th>
                
    		</tr>
    		<?php
    			foreach ($result as $key => $row) {
    				echo "<tr>";
    				echo "<td>".$row['book_id']."</td>";
    				echo "<td>".$row['name']."</td>";
    				echo "<td>".$row['author']."</td>";
                    echo "<td>Available</td>";
                    echo "<td>";
                    include "../layout/rentButton.php";
                    include "../layout/deleteButton.php";
                    echo "</td>";
                    foreach($result2 as $key2 => $row2){
                        //echo "<td>".$row2['return_datetime']."</td>";
                        //echo "<td><button>Rent</button><button>Delete</button></td>";
                    }
    			}
    		?>
            

	   </table>
       <?php include '../layout/footer.php'; ?>
   </body>

</html>
