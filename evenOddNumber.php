<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Number</title>
</head>
<body>
    <!-- using form input the number -->
    <form action="evenOddNumber.php" method="POST">
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

    if($number%2==0){
        echo "<br>The ".$number." is Even.";
    }else{
        echo "<br>The ".$number." is Odd.";
    }

    }
?>