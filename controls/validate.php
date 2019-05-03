<?php



    include "../connects/db_connect.php";

    require "../models/member_db.php";
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    
    $query = "select * from team_member where member_name = '".$username."' and password = '".$password."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
  
    if(!empty($result))
    {
        $_SESSION['member_name'] = $username;
        $_SESSION['member_id'] = $result['member_id'];
        $_SESSION['leader'] = checkIfLeader($result['member_id']);
        $_SESSION['team_id'] = $result['team_id'];
        include "../kudos/index.php";
    }else
    {
        include "../controls/login_failed.php";
    }
    
?>