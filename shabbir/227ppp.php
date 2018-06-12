<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

$int = "hold";
if(filter_var($int,FILTER_VALIDATE_INT) ===0 ||!filter_var($int,FILTER_VALIDATE_INT) ===false) {
	echo("int is valid");
}else{

	echo("int is not valid");

	# code...
}










	?>

</body>
</html>