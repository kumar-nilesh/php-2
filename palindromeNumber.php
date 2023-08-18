<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="palindromeNumber.php" method="POST">
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
    $num = $number;

    $revnum = 0;

    while($num > 1){
        $lastDigit = $num % 10;
        $revnum = ($revnum*10)+$lastDigit;
        $num = $num/10;
    }

    if($number == $revnum){
        echo "The number ".$number." is a Palindrome Number";
    }else{
        echo "The number ".$number." is not a Palindrome Number";
    }
}
?>