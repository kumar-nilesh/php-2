<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
        <!-- using form input the number -->
        <form action="primeNumber.php" method="POST">
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

    for($i = 2; $i <= $number-1 ; $i++){
        if($number % $i == 0){
            $flag = True;
        }
    }
    if(isset($flag) && $flag){
        echo "The Number ".$number." is not Prime";
    }else{
        echo "The Number ".$number." is Prime";
    }

    }
?>