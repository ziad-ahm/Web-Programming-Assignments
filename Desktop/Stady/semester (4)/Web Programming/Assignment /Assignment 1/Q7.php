<!DOCTYPE html>
<html>
<head>
    <title>Total or Factorial</title>
</head>
<body>

<h2>Calculate Total or Factorial</h2>

<form method="post">
    Enter m:
    <input type="number" name="m" required><br><br>

    <input type="submit" name="total" value="Print Total">
    <input type="submit" name="factorial" value="Print Factorial">
</form>

<?php
if(isset($_POST["total"])){

    $m = $_POST["m"];
    $sum = 0;

    for($i=1; $i<=$m; $i++){
        $sum += $i;
    }

    echo "<h3>Total = $sum</h3>";
}

if(isset($_POST["factorial"])){

    $m = $_POST["m"];
    $fact = 1;

    for($i=1; $i<=$m; $i++){
        $fact *= $i;
    }

    echo "<h3>Factorial = $fact</h3>";
}
?>

</body>
</html>