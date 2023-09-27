<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 5</title>
</head>
<body>
    <p>5. Math functions</p>
    <!-- <form action="index5.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x">
        <br>
        <label for="">y:</label>
        <input type="text" name="y">
        <br>
        <label for="">z:</label>
        <input type="text" name="z">
        <br>
        <input type="submit" value="total">
    </form> -->

    <!-- ------------------------------------------------------------ -->
    
    <form action="index5.php" method="post">
        <label for="">radius:</label>
        <br>
        <input type="text" name="radius">
        <br>
        <input type="submit" value="calculate">
    </form>
    <br>
</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    //$total = abs($x); // absolute value function
    //$total = round($x); // round function
    //$total = floor($x); // round down function
    //$total = ceil($x); // round up function (ciel like ceiling)
    //$total = pow($x, $y); // power function
    //$total = sqrt($x); // square root function
    //$total = max($x, $y, $z); // max of given number function
    //$total = min($x, $y, $z); // min of given number function
    //$total = pi(); // return the number pi
    //$total = rand(1, 100); // random number;

    //echo $total;

    // ------------------------------------------------------------------

    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference} cm <br>";
    echo "Area = {$area} cm² <br>";
    echo "Volume = {$volume} cm^3 <br>";
?>