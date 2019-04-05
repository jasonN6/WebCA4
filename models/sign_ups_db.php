<?php


function createSignUps($tournament_id,$team_id)
{
    global $db;
    $query = "insert into tournament_sign_ups values('".$tournament_id.",'".$team_id."','undecided')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteSignUps($team_id,$tournament_id)
{
    global $db;
    $query = "delete from tournament_sign_ups where team_id=".$team_id." and tournament_id = ".$tournament_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function getParticipants($tournament_id)
{
    global $db;
    $query = "select team.team_name from team 
              inner join tournament_sign_ups 
              on team.team_id = tournament_sign_ups.team_id
              where tournament_sign_ups.tournament_id = 1".$tournament_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}


?>