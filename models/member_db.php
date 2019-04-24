<?php


function createMember($name,$password)
{
    global $db;
    $query = "insert into team_member values(null,-1,'".$name."',0,'".$password."')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteMember($id)
{
    global $db;
    $query = "delete from team_member where team_id = ".$id;
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

function getMemberByID($id)
{
    global $db;
    $query = "select * from team_member where member_id = ".$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
    

}

function getMemberByTeamId($id)
{
    global $db;
    $query = "select * from team_member where team_id = ".$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
    

}

function getNonLeaderInTeam($leaderID,$teamID)
{
    global $db;
    $query = "select * from team_member where team_id = ".$teamID." and member_id != ".$leaderID;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}

function checkIfLeader($member_id)
{
    global $db;
    $query = "select * from team where team_leader = ".$member_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    
    
    if(empty($result))
    {
        return 0;
    }else
    {
        return 1;
    }
    
    
}
?>