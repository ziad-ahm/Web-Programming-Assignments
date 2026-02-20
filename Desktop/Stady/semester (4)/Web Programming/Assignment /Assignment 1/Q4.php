<!DOCTYPE html>
<html>
<head>
    <title>Month to Season</title>
</head>
<body>

<h2>Enter Month Number</h2>

<form method="post">
    <input type="number" name="month" required>
    <input type="submit" name="check" value="Submit">
</form>

<?php
if(isset($_POST["check"])){

    $month = $_POST["month"];

    if($month==3 || $month==4 || $month==5){
        echo "<p style='color:green'>Spring</p>";
    }
    elseif($month==6 || $month==7 || $month==8){
        echo "<p style='color:red'>Summer</p>";
    }
    elseif($month==9 || $month==10 || $month==11){
        echo "<p style='color:orange'>Autumn</p>";
    }
    elseif($month==12 || $month==1 || $month==2){
        echo "<p style='color:blue'>Winter</p>";
    }
    else{
        echo "<p style='color:black'>Invalid</p>";
    }
}
?>

</body>
</html>