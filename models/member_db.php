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

function getMemberIDByName($name)
{
    global $db;
    
    $query = "select * from team_member where member_name = ".$name;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    
    return $result['member_id'];
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

function leaveTeam($member_id)
{
    global $db;
    $query = "update team_member set team_id = -1 where member_id = ".$member_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function dismissTeam($team_id)
{
    global $db;
    $query = "update team_member set team_id = -1 where team_id = ".$team_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    $query2 = "delete from team where team_id = ".$team_id;
    $statement2 = $db->prepare($query2);
    $statement2->execute();
    $statement2->closeCursor();
}

function joinTeam($member_id,$team_id)
{
    global $db;
    $query = "update team_member set team_id = ".$team_id." where member_id = ".$member_id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}


?>