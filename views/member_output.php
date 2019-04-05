<?php

function displaySearchMember($result)
{
    foreach($result as $res)
    {
        echo "<p>".$res['member_name']."+++<p>";
    }
}