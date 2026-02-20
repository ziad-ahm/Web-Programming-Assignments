<?php
$physical=["Book1","Book2",""];
$electronic=["EBook1","","EBook2"];

$merged=array_merge($physical,$electronic);
$filtered=array_filter($merged);

print_r($filtered);
?>