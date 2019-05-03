<?php

    include "../connects/db_connect.php";
    require '../models/request_db.php';
    
    $member_id = $_SESSION['member_id'];
    $team_id = filter_input(INPUT_POST, "team_id",FILTER_VALIDATE_INT);
    
    request_join($member_id, $team_id);
    
    include "index.php";
    
    