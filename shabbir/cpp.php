<?php



$cookie_name ="user";
$cookie_value ="shabbir";

setcookie($cookie_name,$cookie_value,time() + (86400 *30), "/");




















	?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if (!isset($_COOKIE[$cookie_name])) {



	echo "cookie_name' " . $_cookie_name . "'is not set";
	# code...
}else{



	echo "cookie ' " . $cookie_name . " 'is set!<br>";
	echo "value is : " . $_COOKIE[$cookie_name];
}




?>
	

</body>
</html>




