<?php
    require "../controller/services/mysqlDB.php";
    $query = "SELECT * from book";
    $query2 = "SELECT return_datetime from rent";
    $result = $db->executeSelectQuery($query);
    $result2 = $db->executeSelectQuery($query2);
?>


<?php include "../layout/head.php" ?>
    
     <button onclick="window.location.href = 'userAdd.php';">add</button>
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

                    foreach($result2 as $key2 => $row2){
                        echo "<td>".$row2['return_datetime']."</td>";
                        echo "<td><button>Rent</button><button>Delete</button></td>";
                    }
    			}
    		?>
            

	   </table>
       <?php 
        include '../layout/footer.php';
       ?>
   </body>

</html>
