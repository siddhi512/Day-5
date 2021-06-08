<?php

//Method 1 NumericArray
$a[0] = 10;
$a[1] = 20;
$a[2] = 30.50;
$a[3] = "C";
$a[4] = "5";

//Method 2 dynamicArray
$a[] = 10;
$a[] = 20;
$a[] = 30.50;
$a[] = "C";
$a[] = "5";
//Method 3
$a = array(10,20,30.50,"C","5");
echo $a[3];
for($i=0;$i<count($a);$i++){
    echo"<br/>".$a[$i];
}
$sum = array_sum($a);
echo "<br/>".$sum;

// Inbuilt functions to debug an array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";