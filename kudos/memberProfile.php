<?php

    include "../connects/db_connect.php";
    require '../models/member_db.php';
    require '../models/team_db.php';
    require '../models/kudos_db.php';
    require '../views/team_output.php';

    $id = filter_input(INPUT_POST, "memberID", FILTER_VALIDATE_INT);
    $member = getMemberByID($id);
    
    $team = getTeamById($member["team_id"]);
    
    $kudo_count = getKudosCount($member["member_id"]);
    
    if(isset($_SESSION['member_id']))
    {
        $kudoed = getKudosByUser($member["member_id"],$_SESSION['member_id']);
        
    }else
    {
        $kudoed = 0;
    }
    
    

?>
<html>
    <head>
        <title><?php echo $member['member_name']; ?>'s Profile</title>
    </head>
    <body onload="init()">
        <script>
        
        function init()
        {
            var kudoed = document.getElementById("kudoed").value;
            if(kudoed==1)
            {
                 document.getElementById("kudo").innerHTML = "Kudoed";
                    
            }else if(kudoed==0)
            {
                document.getElementById("kudo").innerHTML = "Kudos to you";
                    
            }
        }
            
            
        function giveKudo() 
        {
            var user = document.getElementById("user").value;
            var receiver = document.getElementById("member_id").value;
            if(user != -1)
            {
                var kudoed = document.getElementById("kudoed").value;
                if(kudoed==1)
                {
                    negativeSE();
                    document.getElementById("kudoed").value = 0;
                }else if(kudoed==0)
                {
                    positiveSE();
                    document.getElementById("kudoed").value = 1;
                }

                
                var kudoed = document.getElementById("kudoed").value;
                if(kudoed==1)
                {
                     document.getElementById("kudo").innerHTML = "Kudoed";

                }else if(kudoed==0)
                {
                    document.getElementById("kudo").innerHTML = "Kudos to you";

                }
                var xmlReq = new XMLHttpRequest();
                xmlReq.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("kudoAmount").innerHTML = this.responseText;
                    }
                };
                xmlReq.open("GET", "../models/give_kudos.php?kudoed=" + kudoed +"&receiver=" + receiver + "&giver=" +user, true);
                xmlReq.send();
                
            }else
            {
                alert("You need to login to perform this action!");
            }
            
                
        }
        
        </script>
        <?php include "../views/header.php" ?>
        <table>
            <tr><td>Name</td><td><?php echo $member['member_name']; ?></td></tr>
            <tr><td>Team</td><td><?php
                if($member['team_id'] == -1)
                {
                    echo "<p>You do not have a team, join one or create one!</p>";
                }else
                {
                    displayTeam($team);
                }
            ?></td></tr>
            <tr><td>Kudos</td><td id="kudoAmount"><?php echo $kudo_count['kudo_count'] ?></td></tr>
            
        </table>
        <button id="kudo" onclick="giveKudo()">Kudos To You!</button>
        <input type="hidden" id="kudoed" value="<?php echo $kudoed; ?>">
        <input type="hidden" id="member_id" value="<?php echo $member['member_id'] ?>">
        <input type="hidden" id="user" value="<?php
        if(isset($_SESSION['member_id']))
        {
            echo $_SESSION['member_id'];
        }else
        {
            echo -1;
        }
        
        ?>">
      <?php include '../views/footer.php';?>
    </body>
</html>