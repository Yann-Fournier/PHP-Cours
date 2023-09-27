<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // hashing = transforming sensitive data (password)
    //           into letters, numbers, and/or symbols
    //           via a mathzmatical process. (similar to encryptation)
    //           Hides the original data from 3rd parties.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 23</title>
</head>
<body>
    <p>23. Password hashing</p>
</body>
</html>

<?php
    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("pizza123", $hash)) {
        echo "You are logged in!";
    }
    else {
        echo "incorrect password!";
    }
?>