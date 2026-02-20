<!DOCTYPE html>
<html>
<head>
    <title>Assignment 2 - Q1</title>
</head>
<body>

<h2>Enter 10 Students Names and Marks</h2>

<form method="post">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Student $i Name: <input type='text' name='name[]' required>";
        echo " Mark: <input type='number' name='mark[]' required><br><br>";
    }
    ?>
    <input type="submit" name="submit" value="Show Passed Students">
</form>

<?php
if (isset($_POST['submit'])) {

    $names = $_POST['name'];
    $marks = $_POST['mark'];

    echo "<h3>Passed Students:</h3>";

    for ($i = 0; $i < 10; $i++) {
        if ($marks[$i] >= 50) {
            echo $names[$i] . " - " . $marks[$i] . "<br>";
        }
    }
}
?>

</body>
</html>