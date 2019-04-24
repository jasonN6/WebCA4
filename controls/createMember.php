<?php

    include "../connects/db_connect.php";
    require '../models/member_db.php';
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    createMember($username, $password);
    $_SESSION['team_id'] = -1;
    $_SESSION['member_id'] = getMemberIDByName($username);
    $_SESSION['leader'] = 0;
    $_SESSION['member_name'] = $username;
    include "index.php";
?>