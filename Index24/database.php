<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // 1. MySQLi Extension
    // 2. PDO (PHP Data Objects)

    // http://localhost/phpmyadmin/
?>

<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, 
                               $db_user, 
                               $db_pass, 
                               $db_name);
    }
    catch(mysqli_sql_exception) {
        echo "Could not connect! <br>";
    }
    
?>