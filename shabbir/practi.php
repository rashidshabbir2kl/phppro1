<html>

<head>


</head>
<body>
	<form method="get"action="<?php echo $_SERVER['PHP_SELF'];?>">
		
Name:<input type="text" name="Fname">
<input type="submit">
	</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="GET") {
	# code...

	$name =$_GET['Fname']; 
	if(empty($name)){

echo "name is empty";

	}else{

		echo $name;
	}
}

?>



</body>
</html>
