<?php

function createKudos($giver,$receiver)
{
    global $db;
    $query = "insert into kudos values('".$giver."','".$receiver."')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

function deleteKudos($giver,$receiver)
{
    global $db;
    $query = "delete from kudos where giver = ".$giver." and receiver = ".$receiver;
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
    
    if(empty($result))
    {
        return 0;
    }else
    {
        return 1;
    }
  
}

function getKudosCount($receiver)
{
    global $db;
    $query = "SELECT COUNT(receiver) as kudo_count FROM kudos WHERE receiver = ".$receiver;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
    
}

?>