<!DOCTYPE html>
<html>
<body>

<form method="post">
Number of students: <input type="number" name="num" required>
<input type="submit" name="step1" value="Enter">
</form>

<?php
if(isset($_POST['step1'])){
    $num=$_POST['num'];
    echo "<form method='post'>";
    echo "<input type='hidden' name='num' value='$num'>";
    for($i=1;$i<=$num;$i++){
        echo "Name: <input type='text' name='name[]' required>";
        echo " Exam1: <input type='number' name='m1[]' required>";
        echo " Exam2: <input type='number' name='m2[]' required><br><br>";
    }
    echo "<input type='submit' name='q2' value='Show Best'>";
    echo "</form>";
}

if(isset($_POST['q2'])){
    $num=$_POST['num'];
    $names=$_POST['name'];
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];

    for($i=0;$i<$num;$i++){
        $best=max($m1[$i],$m2[$i]);
        echo $names[$i]." Best Mark: ".$best."<br>";
    }
}
?>

</body>
</html>