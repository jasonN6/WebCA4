<?php

require "../models/member_db.php";
require "../models/team_db.php";
require "../views/team_output.php";
require "../views/member_output.php";

function display_request($requests)
{
    foreach($requests as $req)
    {
        $member = getMemberByID($req['member_id']);
        $team = getTeamById($req['team_id']);
        
        if($req['type'] == 1)
        {
            echo $member['member_name']." requested to join ".$team['team_name'];
            
        }else if($req['type'] == 2)
        {
            echo $member['member_name']." left ".$team['team_name'];
        }
    }
}