<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 2</title>
</head>
<body>
    
</body>
</html>

<?php
    echo"2. Variables et types de données: <br> <br>";

    //string
    $name = "Bro code";
    $food = "pizza";
    $email = "fake123@gmail.com";

    echo $name;
    echo "<br>";
    echo "Hello {$name} <br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";
    echo "<br>";

    // integer
    $age = 21;
    $users = 2;
    $quantity = 4;

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy  {$quantity} items<br>";
    echo "<br>";

    //float
    $gpa = 2.5;
    $price = 5.99;
    $taxe_rate = 5.1;

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "Your sales tax rate is {$taxe_rate}%<br>";
    echo "<br>";

    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Online status: {$online}<br>"; // Nothing is display for false
    echo "Employed: {$employed}<br>"; // a 1 is display
    echo "<br>";

    // Other test
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$food}s<br>";
    echo "Your total  is: \${$total}<br>";

    echo "<br>";
    echo "<br>";
?>