<?php

    include "../connects/db_connect.php";
    
    require "../models/kudos_db.php";

    $kudoed = $_REQUEST['kudoed'];
    $receiver = $_REQUEST['receiver'];
    $giver = $_REQUEST['giver'];

   
    
    if($kudoed == "0")
    {
        deleteKudos($giver, $receiver);
    }else if($kudoed == "1")
    {
        createKudos($giver, $receiver);
    }
    
    $count = getKudosCount($receiver);
    $response = $count['kudo_count'];
    echo $response;
?>
