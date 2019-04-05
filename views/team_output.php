<?php

function displaySearchTeam($result)
{
    foreach($result as $res)
    {
        echo "<p>".$res['team_name']."+++<p>";
    }
}