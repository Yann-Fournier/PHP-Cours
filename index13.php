<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // isset() = return true if a variable is declared and not null
    // empty() = return true if a variable is not déclared, null, false, ""
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 13</title>
</head>
<body>
    <p>13. isset() & empty()</p>

    <form action="index13.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
    
</body>
</html>

<?php
    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    
    // if(isset($_POST["login"])){
    //     $username3 = $_POST["username"];
    //     $password = $_POST["password"];

    //     if(empty($username3)) {
    //         echo "username is missing";
    //     }
    //     elseif(empty($password)) {
    //         echo "Password is missing";
    //     }
    //     else {
    //         echo "Hello {$username3}";
    //     }
    // }

    echo "<br><br><br>";
?>

<?php
    echo "Example: <br>";

    $username = "BroCode";

    if(isset($username)) {
        echo "the variable is set<br>";
    }
    else {
        echo "the variable is not set<br>";
    }

    $username2 = "BroCode";

    if(empty($username2)) {
        echo "the variable is empty <br>";
    }
    else {
        echo "the variable is not empty<br>";
    }
?>