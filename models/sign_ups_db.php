<?php


function createSignUps($tournament_id,$team_id)
{
    global $db;
    $query = "insert into tournament_sign_ups values('"+$tournament_id+",'"+$team_id+"','undecided')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteSignUps($team_id,$tournament_id)
{
    global $db;
    $query = "delete from tournament_sign_ups where team_id="+$team_id+" and tournament_id = "+$tournament_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}


?>