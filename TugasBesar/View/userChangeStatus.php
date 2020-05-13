<?php
include "../View/headerUser.html";
?>


<br>



<?php include "../Controller/userChangeStatus.php"; ?>



<div class="divIn">
    <form method="post" action="../Controller/userChangeStatus.php">


    <label id="label-1" style="font-size: 20px;">Apakah anda yakin ingin mendeactivate Account?</label>
            <select id="tipe" name="status"><br>
            <option value="0">Ya</option>
            <option value="1">Tidak</option>

        <input class="button" type="submit" value="save"><br>


    </form>
</div>
