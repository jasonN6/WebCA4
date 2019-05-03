<?php

    include "../connects/db_connect.php";
    
    require "../models/team_db.php";
    require "../models/member_db.php";
    require "../views/member_output.php";
    require "../models/kudos_db.php";
    

    $id = filter_input(INPUT_POST, "team_id", FILTER_VALIDATE_INT);
    
    $team = getTeamById($id);
    
    
    
    $leader = getMemberByID($team['team_leader']);
    
    $members = getNonLeaderInTeam($leader['member_id'], $id);
    
    $kudos = getTeamKudosCount($id);
    
    
    
?>

<html>
    <head>
        <title><?php echo $team['team_name'] ?>'s Profile</title>
    </head>
    <body>
        <?php include "../views/header.php" ?>
        
        <p>Name=<?php echo $team['team_name'] ?></p>
        <p>Team Leader=<?php displayLeader($leader); ?></p>
        <p>Members</p>
        <?php displaySearchMember($members); ?>
        <p>Kudos:<?php echo $kudos; ?></p>
        <p>Team Description=<?php echo $team['team_desc'] ?></p>
        
        
        </table>
        
        <?php
        
        if(isset($_SESSION['team_id']))
        {
            if($_SESSION['team_id'] == $id)
            {
                echo "<form action='../controls/leave_team.php' method='post'><input type='submit' value='Leave this team' onclick='negativeSE()'><input type='hidden' value='".$id."' name='team_id'></form>";
            }else if($_SESSION['team_id'] == -1)
            {
                echo "<form action='../controls/send_join_request.php' method='post'><input type='submit' value='Request to Join' onclick='positiveSE()'><input type='hidden' value='".$id."' name='team_id'></form>";
            }
        }
        
        ?>
        
        <?php include '../views/footer.php';?>
        
    </body>
</html>