<?php

    include "../connects/db_connect.php";
    
    require "../models/tournament_db.php";
    require "../views/tournament_output.php";
    require "../views/sign_ups_output.php";
    require "../models/sign_ups_db.php";
    require "../views/team_output.php";
    
    $tournament_id = filter_input(INPUT_POST, "tournament_id", FILTER_VALIDATE_INT);
    
    $result = getParticipants($tournament_id);
    
    displaySearchTeam($result);