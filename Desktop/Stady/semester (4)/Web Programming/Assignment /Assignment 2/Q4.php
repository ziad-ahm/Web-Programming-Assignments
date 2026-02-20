<!DOCTYPE html>
<html>
<body>

<form method="post">
<?php
for($i=1;$i<=5;$i++){
    echo "Name: <input type='text' name='name[]' required>";
    echo " W7: <input type='number' name='w7[]' required>";
    echo " W12: <input type='number' name='w12[]' required>";
    echo " Attendance: <input type='number' name='att[]' required>";
    echo " Final: <input type='number' name='final[]' required><br><br>";
}
?>
<input type="submit" name="q4" value="Calculate">
</form>

<?php
if(isset($_POST['q4'])){
    $names=$_POST['name'];
    $w7=$_POST['w7'];
    $w12=$_POST['w12'];
    $att=$_POST['att'];
    $final=$_POST['final'];

    $sumW7=array_sum($w7);
    $sumW12=array_sum($w12);
    $sumAtt=array_sum($att);
    $sumFinal=array_sum($final);

    for($i=0;$i<5;$i++){
        $total=$w7[$i]+$w12[$i]+$att[$i]+$final[$i];
        echo $names[$i]." Total: ".$total."<br>";
    }

    echo "<br>Average W7: ".($sumW7/5);
    echo "<br>Average W12: ".($sumW12/5);
    echo "<br>Average Attendance: ".($sumAtt/5);
    echo "<br>Average Final: ".($sumFinal/5);
}
?>

</body>
</html>