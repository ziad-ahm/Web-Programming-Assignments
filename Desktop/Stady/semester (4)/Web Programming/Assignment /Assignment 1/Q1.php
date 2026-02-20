<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculator</title>
</head>
<body>

<h2>Circle Calculations</h2>

<form method="post">
    Enter Radius:
    <input type="number" name="radius" step="any">
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset ($_POST["calculate"]) ){

    $r = $_POST["radius"];
    $pi = 22/7;

    $diameter = 2 * $r;
    $area = $pi * $r * $r;
    $circumference = 2 * $pi * $r;

    echo "<h3>Results:</h3>";
    echo "Diameter = " . $diameter . "<br>";
    echo "Area = " . $area . "<br>";
    echo "Circumference = " . $circumference . "<br>";
}
?>

</body>
</html>