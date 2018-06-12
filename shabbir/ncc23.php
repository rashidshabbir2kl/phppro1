<?php

$ip = "127.0.0.1";


if (!filter_var($ip,FILTER_VALIDATE_IP) === FALSE) {



	echo("$ip is a valid ip address");
	# code...
}else{

echo("$ip is not a valid ip address");

}
?>


