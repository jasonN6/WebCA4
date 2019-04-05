<?php


    include '../connects/db_connect.php';

    
    require "../views/team_output.php";
    require "../models/team_db.php";
    
    require "../models/member_db.php";
    require "../views/member_output.php";
    
    require "../models/tournament_db.php";
    require "../views/tournament_output.php";

    $term = filter_input(INPUT_POST, "search",FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, "type",FILTER_SANITIZE_STRING);
    
    if($type==="team")
    {
        $result = searchTeam($term);
    
    }else if($type==="member")
    {
        $result = searchMember($term);
    }else if($type==="tournament")
    {
        $result = searchTournament($term);
    }else
    {
        
    }
    
    
?>
<html>
    <head>
        <title>
            Search Results
        </title>
    </head>
    <body>
        <?php
        if($type==="team")
        {
            displaySearchTeam($result);
        }else if($type==="member")
        {
            displaySearchMember($result);
        }else if($type==="tournament")
        {
            displaySearchTournament($result);
        }else
        {

        }
        ?>
    </body>
</html>
    
    
