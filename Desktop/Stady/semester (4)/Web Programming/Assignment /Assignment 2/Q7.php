<?php
$prog=[101,102,103,104];
$multi=[103,104,105];

$common=array_intersect($prog,$multi);
print_r($common);
?>