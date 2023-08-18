<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tableOfNumbers.php" method="POST">
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

    for($i = 1; $i <=10; $i++){
        echo $number." * ".$i." = ".$number*$i;
        echo "<br>";
    }

    }
?>