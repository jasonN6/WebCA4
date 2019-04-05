<form action="searchResults.php" method="post">
    <input type="text" placeholder="Search something..." required name="search">
    <br>
    <span>Please select what you wish to search:</span>
    <br>
    <input type="radio" name="type" value="team" checked>Team
    <br>
    <input type="radio" name="type" value="member">Team Member
    <br>
    <input type="radio" name="type" value="tournament">Tournament
    <br>
    <input type="submit" value="Search">
</form>