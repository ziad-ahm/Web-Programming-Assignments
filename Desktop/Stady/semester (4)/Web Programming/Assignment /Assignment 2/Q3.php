<!DOCTYPE html>
<html>
<body>

<form method="post">
Enter marks separated by comma:<br>
<input type="text" name="marks" required>
<input type="submit" name="q3" value="Calculate">
</form>

<?php
if(isset($_POST['q3'])){
    $marks=explode(",",$_POST['marks']);
    $avg=array_sum($marks)/count($marks);

    $above=0;
    $fail=0;

    foreach($marks as $m){
        if($m > $avg) $above++;
        if($m < 50) $fail++;
    }

    echo "Average: ".$avg."<br>";
    echo "Above Average: ".$above."<br>";
    echo "Failed: ".$fail."<br>";
}
?>

</body>
</html>