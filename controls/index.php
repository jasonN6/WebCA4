<?php

    include "../connects/db_connect.php";
    
    $randomQuotes = mt_rand(0, 5);
    
    $quote = "";
    
    if($randomQuotes===0)
    {
        $quote = "The epic tournament manager!";
    }else if($randomQuotes===1)
    {
        $quote = "Let's be best frenemies!";
    }else if($randomQuotes===2)
    {
        $quote = "Round 1, fight!";
    }else if($randomQuotes===3)
    {
        $quote = "Team work begins by building trust!";
    }else if($randomQuotes===4)
    {
        $quote = "Team work makes the dream work!";
    }else if($randomQuotes===5)
    {
        $quote = "Hey there, team up?";
    }
    

?>

<html>
    <head>
        <title>Kudos - A tournament management system</title>
    </head>
    <body>
        <h3><?php echo $quote ?></h3>
        
        
        <?php
            
            if(!isset($_SESSION['member_name']))
            {
                echo '<a href="login_form.php">Login</a>';
            }else
            {
                echo '<h4>Welcome back! ';
                if($_SESSION['leader'] == 1)
                {
                    echo 'Leader ';
                }
                echo $_SESSION['member_name'].'!</h4>';
                echo '<a href="logout.php">Logout</a>';
            }
        
            include "searchForm.php"
        
        ?>
    </body>
</html>