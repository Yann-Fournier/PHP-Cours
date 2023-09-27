<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 4</title>
</head>
<body>
    <p>4. $_Get & $_Post:</p>
    <!-- <form action="index4.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="">Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> -->

    <!-- ------------------------------------------------------------------------------ -->
    
    <form action="index4.php" method="post">
        <label for="">Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    
</body>
</html>
<?php
    // collect data from an HTML form
    // <form action="some_file.php" methode="get">

    // echo $_POST["username"] . "<br>"; 
    // echo "{$_POST["password"]}<br>";

    // --------------------------------------------------------------------------------
    
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $quantity * $price;

    echo "You ave ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
?>