<!DOCTYPE html>
<html>
<head>
    <title>Car Depreciation</title>
</head>
<body>

<h2>Car Depreciation (5 Years)</h2>

<form method="post">
    Original Price:
    <input type="number" name="price" required><br><br>

    Residual Value:
    <input type="number" name="residual" required><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset($_POST["calculate"])){

    $price = $_POST["price"];
    $residual = $_POST["residual"];
    $life = 5;

    $annual = ($price - $residual) / $life;
    $acc = 0;

    for($year=1; $year<=$life; $year++){

        $begin = $price - $acc;
        $acc += $annual;
        $end = $price - $acc;

        echo "<h3>Year $year</h3>";
        echo "Beginning Value = $begin <br>";
        echo "Annual Depreciation = $annual <br>";
        echo "Accumulated Depreciation = $acc <br>";
        echo "End Value = $end <br><br>";
    }
}
?>

</body>
</html>