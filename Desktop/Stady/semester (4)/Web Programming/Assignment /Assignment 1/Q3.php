<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation</title>
</head>
<body>

<h2>Solve Quadratic Equation</h2>

<form method="post">
    a: <input type="number" name="a" step="any" required><br><br>
    b: <input type="number" name="b" step="any" required><br><br>
    c: <input type="number" name="c" step="any" required><br><br>
    <input type="submit" name="solve" value="Solve">
</form>

<?php
if(isset($_POST["solve"])){

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if($a == 0){
        echo "Value of a cannot be zero.";
    }
    else{
        $discriminant = ($b*$b) - (4*$a*$c);

        if($discriminant >= 0){

            $x1 = (-$b + sqrt($discriminant)) / (2*$a);
            $x2 = (-$b - sqrt($discriminant)) / (2*$a);

            echo "<table border='1' cellpadding='10'>";
            echo "<tr>
                    <th>Discriminant</th>
                    <th>x1</th>
                    <th>x2</th>
                  </tr>";

            echo "<tr>
                    <td>$discriminant</td>
                    <td>$x1</td>
                    <td>$x2</td>
                  </tr>";
            echo "</table>";
        }
        else{
            echo "<p style='color:red'>No Real Solution (Negative Discriminant)</p>";
        }
    }
}
?>

</body>
</html>