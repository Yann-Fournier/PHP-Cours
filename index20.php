<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // cookie = Informations about user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and
    //          other non-sensitive data
    //          F12 -> applications to view cookies
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 20</title>
</head>
<body>
    <p>20. Cookies</p>
</body>
</html>

<?php
    setcookie("fav_food", "pizza", time() + (86400 *2), "/"); // time()-0 (to delete a cookie)
    setcookie("fav_drink", "coffee", time() + (86400 *3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 *4), "/");

    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    echo "<br>";

    if(isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else {
        echo "I don't now your favorite food";
    }
?>