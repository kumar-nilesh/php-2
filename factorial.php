<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="factorial.php" method="POST">
        Enter Your Number :
        <input type="number" name="num">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<!-- php code -->
<?php
    // check if the submit is set of not
    if(isset($_POST['submit'])){

    // store the num to $number
    $number = $_POST['num'];
    $fact = 1;
    if($number === 0){
        echo "Factorial of ".$number." is ".$fact;
    }else{
        for($i = $number; $i>0; $i--){
            $fact = $fact * $i;
        }
        echo "Factorial of ".$number." is ".$fact;
    }
    }
?>