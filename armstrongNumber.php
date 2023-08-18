<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>
<body>
    <form action="armstrongNumber.php" method="POST">
        Enter Your Number :
        <input type="number" name="num">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    // check if the submit is set of not
    if(isset($_POST['submit'])){

    // store the num to $number
    $number = $_POST['num'];
    $sum = 0;
    $num = $number;

    while($num!=0){
        $lastDigit = $num%10;
        $sum = $sum + ($lastDigit*$lastDigit*$lastDigit);
        $num = $num / 10;
    }

    if($sum == $number){
        echo "yes ".$number." is an Armstrong Number";
    }else{
        echo "No ".$number." is not an Armstrong Number";
    }


    }
?>