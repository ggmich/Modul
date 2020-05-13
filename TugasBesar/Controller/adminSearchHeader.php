<?php
    /*

      Module for search campaign name in adminMenu


    */
    include "../Model/mysqlDB.php";

    $query = "SELECT * FROM campaign";

    //search variable
    $campaignName = "";

    // search mechanism
    if(isset($_GET['search'])){
      $campaignName = $_GET['search'];
      if(isset($campaignName) && $campaignName != ""){
        $campaignName = $db->escapeString($campaignName);
        $query .= " WHERE `nameCampaign` LIKE '$%$campaignName%'";
      }

    }
    $result = $db->executeSelectQuery(query);



 ?>
