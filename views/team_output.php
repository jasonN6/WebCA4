<?php

function displaySearchTeam($result)
{
    foreach($result as $res)
    {
        echo "<p>".$res['team_name']."<p>";
    }
}

function displayTeam($team)
{
    echo "<form action='../kudos/teamProfile.php' method='post'>"
    . "<input type='hidden' name='team_id' value='".$team["team_id"]."'><input type='submit' value='".$team['team_name']."'></form>";
}