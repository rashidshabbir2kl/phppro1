<?php
$a = 95; //local veriable

$b = 100;


function yourTest()


{
 

 global $a, $b;

 $b = $a + $b;



}

yourTest();
echo "<h1> this is new number: $b </h1>";

?>