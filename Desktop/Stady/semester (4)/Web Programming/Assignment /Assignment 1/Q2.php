<!DOCTYPE html>
<html>
<head>
    <title>Minutes Converter</title>
</head>
<body>

<h2>Convert Minutes to Hours</h2>

<form method="post">
    Enter Minutes:
    <input type="number" name="minutes" required>
    <input type="submit" name="convert" value="Convert">
</form>

<?php
if(isset($_POST["convert"])){

    $minutes = $_POST["minutes"];

    $hours = floor($minutes / 60);
    $remaining = $minutes % 60;

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>";
    echo "<th>Hours</th>";
    echo "<th>Remaining Minutes</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$hours</td>";
    echo "<td>$remaining</td>";
    echo "</tr>";

    echo "</table>";
}
?>

</body>
</html>