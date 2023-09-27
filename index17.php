<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 17</title>
</head>
<body>
    <p>17. String Functions</p>
</body>
</html>

<?php
    $username = "Bro Code";
    $phone = "123-456-7890";
    $username2 = "Bro The Code";
    $username3 = array("Bro", "The", "Code");

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);// delete spaces before and after your string
    // $username = str_pad($username, 20, "/");// give a max size for your string and fill the reste with te given signe.
    // $phone = str_replace("-", "/", $phone); // replace a caractere in the given string by another one.
    // $username = strrev($username); // reverse a string
    // $username = str_shuffle($username); // to shuffle a string (mélenger l'ordre des lettres)
    // $equals = strcmp($username, "Bro Code"); // compare two strings (same => 0, not the same => 1 or -1)
    // $count = strlen($username); // length of a string
    // $index = strpos($username, " "); // return the first iteration of a string in a string
    // $firstname = substr($username, 0, 3);
    // $lastname = substr($username, 4);
    // $fullname = explode(" ", $username2);// split a string in an array by a caractere
    // $username = implode(" ", $username3); // convert an array to a string 


    echo $username . "<br>";
    echo $phone . "<br>";
    // echo $equals . "<br>";
    // echo $count . "<br>";
    // echo $index . "<br>";
    // echo $firstname . "<br>";
    // echo $lastname . "<br>";
    // foreach($fullname as $name) {
    //     echo $name . "<br>";
    // }
?>