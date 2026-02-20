<?php
function grade($total){
    if($total>=95) return "A+";
    elseif($total>=90) return "A";
    elseif($total>=85) return "A-";
    elseif($total>=80) return "B+";
    elseif($total>=75) return "B";
    elseif($total>=70) return "B-";
    elseif($total>=65) return "C+";
    elseif($total>=60) return "C";
    elseif($total>=55) return "C-";
    elseif($total>=50) return "D";
    else return "F";
}
?>