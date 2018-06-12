<?php

$email = "dastgir333@gmail.com";

// remove all ellegal characters from email
$email = filter_var($email,FILTER_SANITIZE_EMAIL);

// validate email 


if (!filter_var($email,FILTER_VALIDATE_EMAIL) === false) {

	echo("$email is a valid email address");
	# code...
}else{

echo("$email is not a valid email address");




}
?>