<?php

  include "../connects/db_connect.php";

if($_SESSION['team_id']!=-1)
{
    header("index.php");
}

?>

<form action="create_team.php" method="post">
    <input type="text" placeholder="Team Name" name="team_name">
    <input type="textarea" placeholder="Tell us about your team..." name="desc">
    <input type="submit" value="Create Team">
</form>