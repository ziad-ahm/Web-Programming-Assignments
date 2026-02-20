<?php
$all=["Ali","Sara","Omar","Mona"];
$submitted=["Ali","Mona"];

$notSubmitted=array_diff($all,$submitted);
print_r($notSubmitted);
?>