<?php

    include "../connects/db_connect.php";
    require '../models/member_db.php';
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    createMember($username, $password);
?>