<?php


function createTeam($name,$desc,$team_leader)
{
    global $db;
    $query = "insert into team values(null,'"+$name+",0,'"+$desc+"','"+$team_leader+"')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteTeam($id)
{

    global $db;
    
    //deleting the team will result in all the members being teamless therefore team_id is set to 0
    $query1 = "update team_member set team_id = 0 where team_id = "+$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $statement1->closeCursor();
    
    
    $query = "delete from team where team_id = "+$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
}

?>