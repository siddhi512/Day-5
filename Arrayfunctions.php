<?php 
//Count
$a = array('php','C','C++','java','Android');
echo count($a);
//Array_count_values
$a = array('php','C','C++','java','Android');
$a1 = array_count_values($a);
foreach ($a1 as $key => $value) {
    echo "<br/>$key - $value";
}
//array_sum
$a = array(1,2,3,4,5);
echo "<br/>".array_sum($a);
//array_product
$a = array(1,2,3,4,5);
echo "<br/>".array_product($a);
//array_reverse
$a = array('php','C','C++','java','Android');
$reva = array_reverse($a);
print_r($reva);
//in_array
$a = array('php','C','C++','java','Android');
$temp = in_array('php',$a);
echo "<br/>".$temp;
//array_rand
$a = array('php','C','C++','java','Android');
$indexofarray = array_rand($a);
echo "<br/>".$a[$indexofarray];
//Array_unique
$a = array('php','C','C++','java','Android');
print_r(array_unique($a));
//Array_merge
$a1 = array('php','C','C++','java','Android');
$a2 = array(10,20,30,40,50);
$Newa = array_merge($a1,$a2);
print_r($Newa);
//array_search
$a = array('php','C','C++','java','Android');
$check = array_search('Android', $a);
echo "<br/>".$check;
//range
$a = range("11", "20");
foreach ($a as $key => $value) {
    echo "<br/>. $key - $value";
   }
   //sort
   $a = array(80,60,48,86,75,8);
   sort($a);
   print_r($a);
   //asort
   $a = array(80,60,48,86,75,8);
   asort($a);
   print_r($a);
   //ksort
   $a = array (
       "Banana" => "Yellow",
       "Apple" => "Red",
       "Mango" => "Green");
   ksort($a);
   foreach ($a as $key => $value) {
       echo "<br/>$key - $value";
   }
   //krsort
   $a = array(
       "Banana" => "Yelloww",
       "Apple" => "Red",
       "Mango" => "Green");
   krsort($a);
   foreach ($a as $key => $value) {
       echo "<br/>$key - $value";
   }
   //shuffle
   $a = array("Football", "Baseball", "Hockey", "Tennis");
   shuffle($a);
   foreach ($a as $key => $value) {
       echo "<br/>$value";
   }
   //array_key_exists
$a = array("a" => "apple", "b" => "banana");
echo "<br/>". array_key_exists('a', $a);
//array_change_key_case
$a = array(
    "Banana" => "Yellow",
    "Apple" => "Red",
    "Mango" => "Green");
$uppercase = array_change_key_case($a,CASE_UPPER);
print_r($uppercase);
//array_combine
$a1 = array("Banana", "Apple", "Mango");
$a2 = array("Yellow", "Red", "Green");
$NewVar = array_combine($a1, $a2);
print_r($NewVar);
//end
$a = array('php','C','C++','java','Android');
echo "<br/>".end($a);
//compact
$name = "Siddhi";
$subject = "php";
$a = compact("name", "subject");
print_r($a);
//array_flip
$a = array("a" => "siddhi", "b" => "banana", "c" => "computer");
$fliparray = array_flip($a);
print_r($fliparray);
//array_diff
$a = array("siddhi","C","C++","java","php","android");
$b = array("siddhi","C","java","php");
$diff = array_diff($a, $b);
print_r($diff);
//array_intersect
$a1 = array(0=>"sunday",1=>"monday",2=>"tuesday");
$a2 = array(3=>"tuesday",4=>"sunday",5=>"thursday");
print_r(array_intersect($a1,$a2));
//array_values
$a = array("i"=>"C","want"=>"C++","learn"=>"php");
$b = array_values($a);
foreach ($b as $key => $value){
    echo "<br/>$key - $value";
}
//array_push
$a = array("C","C++");
array_push($a,"java","php");
print_r($a);
//array_pop
$a = array("C", "C++", "java", "php", "ASP");
array_pop($a);
print_r($a);
array_pop($a);
print_r($a);
//explode
$string = "I love India";
$a = explode(" ",$string);
print_r($a);
//implode
$a = array("I", "Love", "India");
$string = implode (" ", $a);
echo "<br/> $string";

        
