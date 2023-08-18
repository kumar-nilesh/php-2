<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fibonacciSeries.php" method="POST">
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
    
    $num1 = 0;
    $num2 = 1;
        echo $num1." ".$num2;
    while($number>0){
        $num3 = $num1 + $num2;
        echo " ".$num3;

        $num1 = $num2;
        $num2 = $num3;
        $number = $number -1;
    }
    
}
?>
