<?php

    include "../connects/db_connect.php";


    //get the input name
    $name = $_REQUEST["name"];

    $response = "This username is not taken.";

    //get all existing names
    $query = "select member_name from team_member";
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    

    
if ($name !== "") {
    
    
    foreach($results as $res) {
        if ($res["member_name"] === $name) {
            $response = "This username has been taken please try a different name.";
            
        }
    }
}




echo $response;
?>