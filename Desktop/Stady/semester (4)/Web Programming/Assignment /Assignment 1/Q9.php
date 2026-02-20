<!DOCTYPE html>
<html>
<head>
    <title>Emoji Pattern</title>
</head>
<body>

<h2>Emoji Pattern</h2>

<form method="post">
    Emoji:
    <input type="text" name="emoji" required><br><br>

    Rows:
    <input type="number" name="rows" required><br><br>

    <input type="submit" name="print" value="Print">
</form>

<?php
if(isset($_POST["print"])){

    $emoji = $_POST["emoji"];
    $rows = $_POST["rows"];

    for($i=1; $i<=$rows; $i++){
        for($j=1; $j<=$i; $j++){
            echo $emoji;
        }
        echo "<br>";
    }
}
?>

</body>
</html>