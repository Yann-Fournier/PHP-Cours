<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 3</title>
</head>
<body>
    
</body>
</html>

<?php // + - * / ** %
    echo"3. Arithmetic: <br> <br>";

    $x = 10;
    $y = 2;
    $z = null;

    //$z = $x + $y; (12)
    //$z = $x - $y; (8)
    //$z = $x * $y; (20)
    //$z = $x / $y; (5)
    //$z = $x ** $y; (100)
    $z = $x % $y; //(0)
    echo $z;
    echo "<br>";

    $counter = 0;
    //$counter++; (+1)
    //$counter--; (-1)
    //$counter+=3; (+3)
    //$counter-=3; (-3)
    echo $counter;
    echo "<br>";

    // Operateur Precedence
    // ()
    // **
    // * / %
    // + -
    $total = 1 + 2 - 3 * 4 / 5 ** 6; // 2.999232
    echo $total;
    echo "<br>";

    echo "<br>";
    echo "<br>"; 
?>
