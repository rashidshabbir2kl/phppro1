<?php

$int = "lkjhgfd";
$min = 1;
$max = "lllllkjk";

if(filter_var($int,FILTER_VALIDATE_INT,
	array("option"=>

array("min_range"=>$min, "max_range"=>$max))) === false){

echo("veriabl value is not within the  legale range");





}else{

	echo("veriable value is within the legale range");

}


?>




