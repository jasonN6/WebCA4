<?php

    include "../connects/db_connect.php";
    require '../models/member_db.php';
    require '../models/team_db.php';
    require '../models/kudos_db.php';
    require '../views/team_output.php';

    $id = filter_input(INPUT_POST, "memberID", FILTER_VALIDATE_INT);
    
    $member = getMemberByID($id);
    
    $team = getTeamById($member["team_id"]);
    


?>
<html>
    <head>
        <title><?php echo $member['member_name']; ?>'s Profile</title>
    </head>
    <body>
        <table>
            <tr><td>Name</td><td><?php echo $member['member_name']; ?></td></tr>
            <tr><td>Team</td><td><?php
                if($member['team_id'] === 0)
                {
                    echo "This person has no team yet";
                }else
                {
                    displayTeam($team);
                }
            ?></td></tr>
            <tr><td>Kudos</td><td>[]</td></tr>
            
        </table>
        <button id="kudo">Kudos To You!</button>
        <button id="unkudo">Un-kudo</button>
        <input type="hidden" id="kudoed" name="kudoed" value="<?php echo getKudosByUser(1, $id)?>">
    </body>
</html>