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

function searchMember($term)
{
    global $db;
    $query = "select * from team_member where member_name like '%".$term."%' or member_name like '%".$term."' or member_name like '".$term."%' or member_name = '".$term."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
    

}

?>