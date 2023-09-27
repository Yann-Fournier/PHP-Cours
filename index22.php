<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // $_SERVER = SGB that contains headers, paths, and script locations.
    //            The entires in this array are created by the web server.
    //            Shows nearly everything you need to know about the
    //            current web page env.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 22</title>
</head>
<body>
    <p>22. $_SERVER</p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username: <br>
        <input type="text" name="username"><br>
        <input type="submit"><br>
    </form>
</body>
</html>


<?php
    // to see how $_SERVER works (details about the associative array)
    foreach($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "The request method is post!!";
    }
?>