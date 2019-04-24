<?php

function displaySearchMember($result)
{
    foreach($result as $res)
    {
        echo "<p><form method='post' action='../kudos/memberProfile.php'>"
        . "<input type='submit' value='".$res['member_name']."'>"
        . "<input type='hidden' name='memberID' value='".$res['member_id']."'></form><p>";
    }
}

function displayMember($res)
{
    echo "<p><form method='post' action='../kudos/memberProfile.php'>"
        . "<input type='submit' value='".$res['member_name']."'>"
        . "<input type='hidden' name='memberID' value='".$res['member_id']."'></form><p>";
}

function displayLeader($res)
{
    echo "<p><form method='post' action='../kudos/memberProfile.php'>"
        . "<input type='submit' value='".$res['member_name']."'>"
        . "<input type='hidden' name='memberID' value='".$res['member_id']."'></form><p>";
}

function displayMyself()
{
    echo "<p><form method='post' action='../kudos/memberProfile.php'>"
        . "<input type='submit' value='My Profile'>"
        . "<input type='hidden' name='memberID' value='".$_SESSION['member_id']."'></form><p>";
}

