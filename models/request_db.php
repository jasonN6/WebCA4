<?php

function request_join($member_id,$team_id)
{
    global $db;
    $query = "insert into request values('".$member_id."','".$team_id."',1,null)";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function approve_request()
{
    
}

function get_all_request($team_id)
{
    global $db;
    $query = "select * from request where team_id = ".$team_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}