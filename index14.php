<?php // Link of the tutorial (youtube: Bro Code):
    // https://www.youtube.com/watch?v=zZ6vybT1HQs&t=1385s&ab_channel=BroCode
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 14</title>
</head>
<body>
    <p>14. Radio buttons</p>
    <form action="index14.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["confirm"])) {
        
        $credit_card = null;

        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }
        
        switch($credit_card) {
            case "Visa":
                echo "You selected Visa";
                break;
            case "Mastercard":
                echo "You selected Mastercard";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default:
                echo "Please make a selection";
        }

        
        
    }
 
?>