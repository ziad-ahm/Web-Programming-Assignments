<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<h2>Multiplication Table</h2>

<form method="post">
    Number 1:
    <input type="number" name="num1" required><br><br>

    Number 2:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="print" value="Print Table">
</form>

<?php
if(isset($_POST["print"])){

    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];

    for($i=1; $i<=$n2; $i++){
        echo "$n1 × $i = " . ($n1*$i) . "<br>";
    }
}
?>

</body>
</html>