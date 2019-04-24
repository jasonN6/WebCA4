<?php

    include '../connects/db_connect.php';
    
    require '../models/member_db.php';
    
    
    
    if($_SESSION['leader'] == 1)
    {
        dismissTeam($_SESSION['team_id']);
    }else
    {
        leaveTeam($_SESSION['member_id']);
    }
    
    
    include 'index.php';