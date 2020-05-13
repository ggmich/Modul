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
    include 'connection.php';
    ?>

    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Campaign</th>
            <th width="5%">Jumlah Pencairan</th>
        </tr>
        <?php
        $no = 1;
        $idCampaign = $_POST['idCampaign'];
        $sql = mysqli_query($koneksi, "select namaCampaign,PencairanDana.totalPencairan, from campaign inner join PencairanDana on campaign.idCampaign = pencairanDana.idCampaign,where idCampaign='$idCampaign'");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jumlahPencairanDana']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>