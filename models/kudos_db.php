<?php

function createKudos($giver,$receiver)
{
    global $db;
    $query = "insert into kudos values('"+$giver+"','"+$receiver+"')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteKudos($giver,$receiver)
{
    global $db;
    $query = "delete from kudos where giver = "+$giver+" and receiver = "+$receiver;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function getKudosByUser($giver,$receiver)
{
    global $db;
    $query = "select * from kudos where giver = '".$giver."' and receiver = '".$receiver."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    
    if($result === null)
    {
        return 1;
    }else
    {
        return 2;
    }
  
}

?>