<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 21 Home</title>
</head>
<body>
    <p>21. Sessions</p>

    This is the home page. <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>

    <p>test</p>
</body>
</html>

<?php 
    echo $_SESSION["username"]. "<br>";
    echo $_SESSION["password"]. "<br>";

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index21.php");
    }
?>