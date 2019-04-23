<script>



function checkForm()
{
    var password1 = document.getElementById("firstPassword").value;
    var password2 = document.getElementById("secondPassword").value;
    var username = document.getElementById("username").value;
    
    if(password1 === password2 && username.length !== 0)
    {
        if(username.length<8)
        {
            document.getElementById("tip").innerHTML = "Your username must be atleast 8 characters long";
        }else if(password1.length<8)
        {
            document.getElementById("tip").innerHTML = "Your password must be atleast 8 characters long";
        }else
        {
            document.getElementById("submitButton").style.visibility = "visible";
        }
    }else
    {
        document.getElementById("submitButton").style.visibility = "hidden";
        if(password1 !== password2)
        {
            document.getElementById("tip").innerHTML = "Your password must match";
        }else if(username.length === 0)
        {
            document.getElementById("tip").innerHTML = "You need to provide a username for your account";
        }
    }
}

</script>
<form action="../controls/createMember.php" method="post">
    <span>Join Kudos today!</span>
    <br>
    <span>Username</span>
    <input type="text" required name="username" id="username" onchange="checkForm()">
    <br>
    <span>Password</span>
    <input type="password" required name="password" id="firstPassword" onchange="checkForm()">
    <br>
    <span>Enter password again</span>
    <input type="password" required name="password_repeat" id="secondPassword" onchange="checkForm()">
    <br>
    <p id="tip">Please fill in the form</p>
    <input type="submit" value="Join Kudos" id="submitButton" style="visibility: hidden">
</form>