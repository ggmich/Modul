<?php
    /*

      Module for search campaign name in adminMenu


    */
    require "../Model/mysqlDB.php";

    $query = "SELECT * FROM campaign";

    //search variable
    $campaignName = "";

    // search mechanism
    if(isset($_POST['search'])){
      $campaignName = $_POST['search'];
      if(isset($campaignName)){
        $campaignName = $db->escapeString($campaignName);
        $query .= " WHERE `nameCampaign` LIKE '$%$campaignName%'";
      }

    }
    $result = $db->executeSelectQuery(query);



 ?>
