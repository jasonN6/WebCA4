<?php

    include "../connects/db_connect.php";
    
    require "../models/team_db.php";
    require "../models/member_db.php";
    
    

    $id = filter_input(INPUT_POST, "team_id", FILTER_VALIDATE_INT);
    
    $team = getTeamById($id);
    
    $members = getMemberByTeamId($id);
    
    $leader = getMemberByID($team['team_leader']);
    
?>

<html>
    <head>
        <title><?php echo $team['team_name'] ?>'s Profile</title>
    </head>
    <body>
        <p>Name=<?php echo $team['team_name'] ?></p>
        <p>Team Leader=<?php $leader['member_name'] ?></p>
        <p>Team Description=<?php echo $team['team_desc'] ?></p>
        
        
        </table>
        
    </body>
</html>