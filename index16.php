<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode

    // function = write some code once, reuse when you need it.
    //            type () after function name to invoke   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 16</title>
</head>
<body>
    <p>16. Functions</p>
    
</body>
</html>

<?php
    function happy_birthday($first_name, $age) {
        echo "Happy Birthday dear {$first_name}!<br>";
        echo "Happy Birthday to you!<br>";
        echo "Happy Birthday dear {$first_name}!<br>";
        echo "You are {$age} years old!<br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);
    echo "<br>";

    function is_heaven($number) {
        if($number%2 == 0) {
            return "{$number} is heaven!<br>";
        }
        else {
            return "{$number} is not heaven!<br>";
        }
    }

    echo is_heaven(11);
    echo is_heaven(12);
    echo is_heaven(404);
    echo is_heaven(501);
    echo "<br>";

    function hypotenuse(int $a,float $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4);
?>