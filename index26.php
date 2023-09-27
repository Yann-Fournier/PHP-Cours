<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    include("./Index24/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 26</title>
</head>
<body>
    <p>26. PHP insert into MySQL database.</p>
</body>
</html>

<?php
    $username = "Patrick3";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception) {
        echo "Could not register user";
    }

    mysqli_close($conn);    
?>