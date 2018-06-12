<html>


<head>
	



</head>
<body>
	<form method="post" action="<?Php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname">	
	<input type="submit">






	</form>



	<?php

	if($_SERVER["REQUEST_METHOD"] == "POST" ){


    $name = $_POST['fname'];
    if(empty($name)){

    	echo "name is empty";


    }else{


    	echo $name;

    }

	}





?>
</body>
</html>