<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    include("./Index24/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 28</title>
</head>
<body>
    <p>28. PHP registration form project</p>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Fakebook!</h2>
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="register"><br>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please enter a username <br>";
        }
        elseif(empty($password)) {
            echo "Please enter a password <br>";
        }
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash')";
            try {
                mysqli_query($conn, $sql);
                echo "You are now registerd!";
            } 
            catch(mysqli_sql_exception) {
                echo "That username is taken";
            } 
        }
    }
    mysqli_close($conn);
?>