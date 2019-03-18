<?php

function createTournament($name,$date,$host)
{
    global $db;
    $query = "insert into tournament values(null,'"+$name+",'"+$host+"','"+$date+"')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteTournament($id)
{
    global $db;
    
    //deleting the tournament will cancel all the sign ups
    $query1 = "delete from tournament_sign_ups where tournament_id="+$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $statement1->closeCursor();
    
    
    $query = "delete from tournament where tournament_id="+$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
}


?>