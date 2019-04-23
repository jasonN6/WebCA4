<?php

function displaySearchMember($result)
{
    foreach($result as $res)
    {
        echo "<p><form method='post' action='../kudos/memberProfile.php'>"
        . "<input type='submit' value='".$res['member_name']."'>"
        . "<input type='hidden' name='memberID' value='".$res['member_id']."'><p>";
    }
}