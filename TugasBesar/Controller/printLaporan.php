<html>

<head>
    <title>History Pencairan Dana</title>
</head>

<body>

    <center>

        <h2>History Pencairan Dana</h2>
        <h4>TogetherWeCan</h4>

    </center>

    <?php
    include '../Model/connection.php';
    ?>

    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Campaign</th>
            <th width="5%">Jumlah Pencairan</th>
        </tr>
        <?php
        $no = 1;

        $idCampaign = $_SESSION['idCampaign'];


        $sql = "select campaign.namaCampaign,PencairanDana.totalPencairan
from campaign
inner join PencairanDana
on campaign.idCampaign = PencairanDana.idCampaign
where campaign.idCampaign='$idCampaign'";
        $result = $connection -> query($sql);

        if ($result -> num_rows > 0) {
          while($row = $result -> fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['namaCampaign']; ?></td>
                <td><?php echo $row['totalPencairan']; ?></td>
            </tr>

        <?php
              }
        }
        ?>

    </table>

    <script>
        window.print();
    </script>

</body>

</html>
