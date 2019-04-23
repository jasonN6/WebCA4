<?php



    include "../connects/db_connect.php";

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    
    $query = "select * from team_member where member_name = '".$username."' and password = '".$password."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
  
    if(!empty($result))
    {
        $_SESSION['username'] = $username;
        $_SESSION['member_id'] = $result['member_id'];
        include "searchForm.php";
    }else
    {
        
    }
    
?>