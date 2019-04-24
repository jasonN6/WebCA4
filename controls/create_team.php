<?php

    include "../connects/db_connect.php";
    
    require "../models/team_db.php";
    require "../models/member_db.php";

    $team_name = filter_input(INPUT_POST,"team_name",FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST,"desc",FILTER_SANITIZE_STRING);
    $leader = $_SESSION['member_id'];
    
    createTeam($team_name, $desc, $leader);
    
    $_SESSION['leader'] = 1;
    $_SESSION['team_id'] = getTeamIDByName($team_name);

    joinTeam($_SESSION['member_id'], $_SESSION['team_id']);
    
    
    
    include "index.php";
    