<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
    <!-- using form input the number -->
    <form action="sumOfDigit.php" method="POST">
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

    $num = $_POST['num'];
    
    // initilize the sum with 0
    $sum = 0;

    while($number>0){
        $lastDigit = $number%10;
        $sum = $sum + $lastDigit;
        $number = $number/10;
    }

    echo "The sum of Digits of ".$num." is ".$sum;
}
?>