<?php
    /*

      Handler for inactive account will be denied to access any features except,
      login, registration, profile, home.php, admin

      and will be redirect to profile so he/she can change to active first if,
      want to continue access the feautres

      Requirement (IMPORTANT):
      - The page must include connetion.php first

    */

      // get session for $statusAkun
      $statusAkunSession = $_SESSION['statusAkun'];

      // status is inactive warn, redirect to profile
      if($statusAkun == 0){
        echo "Your account status is inactive, please change first in profile";
        echo "<script>setTimeout(\"location.href = 'http://192.168.64.2/Modul/TugasBesar/View/userProfile.php';\",1500);</script>";
      }
 ?>
