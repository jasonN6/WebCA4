<?php


function createMember($name,$password)
{
    global $db;
    $query = "insert into team_member values(null,null,'"+$name+"',0,"+$password+"')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteMember($id)
{
    global $db;
    $query = "delete from team_member where team_id = "+$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

?>