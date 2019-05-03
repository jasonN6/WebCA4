<!--The header contains the navbar and some javascript components I will use for some of the webpage as well as the CDN for bootstrap and jquery-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstraps components-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
let positive = new Audio('../audio/positive.ogg');   
         let negative = new Audio('../audio/negative.ogg');
         let finish = new Audio('../audio/finish.ogg');
         
         let audioPlay = true;
         
         function setAudio()
         {
             audioPlay = !audioPlay;
             if(audioPlay)
             {
                 document.getElementById("audioButton").innerHTML = "&#xf028;";
             }else
             {
                document.getElementById("audioButton").innerHTML = "&#xf026;";
                 
             }
         }
         
         function positiveSE()
         {
             
            if(audioPlay)
            {
                positive.play();
            }
                
         }
         
         function negativeSE()
         {
            if(audioPlay)
            {
                 negative.play();
            }
         }
</script>

<style>
    
    body
    {
        background-color: #FDFDF6;
    }
    
    #banner
    {
        text-decoration: none;
        color:#75CAC3;
        font-size: 100px;
        
    }
    
    #banner:active
    {
        color: black;
        text-decoration: none;
    }
    
    #banner:hover
    {
        color:#2A6167;
    }
    
    #bannerwrap:hover
    {
        border-color: #75CAC3;
        
        
    }
    
    #bannerwrap
    {
        margin-top: 10px;
        margin-left: 20px;
        margin-right: 20px;
        width:auto;
        border: 3px solid #75CAC3;
        border-radius: 10px;
        text-align: center;
        background-color: #B7F7F5;
    }
    
    #content
    {
        margin-top: 50px;
    }
    
</style>

<a id="banner" href="../kudos/index.php"><div id="bannerwrap">Kudos</div></a>
