<?php

    include "../connects/db_connect.php";
    
    $_SESSION['member_name'] = null;
    $_SESSION['member_id'] = null;
    $_SESSION['leader'] = null;
    $_SESSION['team_id'] = null;
    include "index.php";
?>