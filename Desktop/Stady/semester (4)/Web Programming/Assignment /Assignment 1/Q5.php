<!DOCTYPE html>
<html>
<head>
    <title>Ticket Price</title>
</head>
<body>

<h2>Ticket Booking</h2>

<form method="post">

    Ticket Type:
    <select name="type">
        <option value="business">Business</option>
        <option value="economy">Economy</option>
    </select>

    <br><br>

    Age:
    <select name="age">
        <option value="infant">Infant</option>
        <option value="child">Child</option>
        <option value="adult">Adult</option>
    </select>

    <br><br>

    <input type="submit" name="book" value="Calculate">

</form>

<?php
if(isset($_POST["book"])){

    $type = $_POST["type"];
    $age = $_POST["age"];

    // تحديد السعر
    if($type == "business"){
        $price = 5200;
    }
    else{
        $price = 2800;
    }

    // تحديد الخصم
    if($age == "infant"){
        $discount = 0.6;
    }
    elseif($age == "child"){
        $discount = 0.25;
    }
    else{
        $discount = 0;
    }

    $net = $price - ($price * $discount);

    echo "<h3>Net Price = $net Pounds</h3>";
}
?>

</body>
</html>