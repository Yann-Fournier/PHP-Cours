<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 18</title>
</head>
<body>
    <p>18. Sanitize/Validate input</p>
    <form action="index18.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login"><br>
    </form>
</body>
</html>

<!-- <script>alert("You have> a VIRUS!");</script> -->

<?php
    if(isset($_POST["login"])) {

        // No sanitization or validation (someone can execute some code in the input)
        // Sanitize and validate your input whenever it'is possible.
        // $username = $_POST["username"];

        // Sanitazation will strip certain caractere use in your input.
        $username = filter_input(INPUT_POST, "username", 
                                FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", 
                                FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", 
                                FILTER_SANITIZE_EMAIL);

        // Validation will return an empty string id the input doesn't pass.
        $age = filter_input(INPUT_POST, "age", 
                            FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", 
                            FILTER_VALIDATE_EMAIL);

        echo "Hello {$username}!<br>";
        echo "You are {$age} years old!<br>";
        echo "Your email is {$email}!<br>";
    }
?>