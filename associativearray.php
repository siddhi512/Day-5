<?php

//Associative Array
//Key = Value
//Method 1
$a[0] = 10;
$a['C'] = "Computer";
$a['php'] = "Web Devlopment";
$a[10] = "Ten";
$a[50] = 50.50;

//Method 2
$a = array(
    0 => 10,
    "C" => "Computer",
    "php" => "Web Devlopment",
    10 => "Ten",
    50 => 50.50
);
echo "C for".$a['C'];

foreach ($a as $value) {
    echo"<br>Value is $value";
}
foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}