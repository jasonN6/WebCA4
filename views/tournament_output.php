<?php

function displaySearchTournament($result)
{
    foreach($result as $res)
    {
        echo "<p>".$res['tournament_name']."+++".$res['tournament_date']."<p>";
        echo "<form action='../kudos/tournament_info.php' method='post'>"
           . "<input type='submit' value='See Info'>"
           . "<input type='hidden' value='".$res["tournament_id"]." name='tournament_id'>"
           . "</form>";
    }
}

