
<!DOCTYPE html>
<html>
<head>
	<title></title>


	<style type="text/css">
		
ul li{

	color: red;
	


}
 


	</style>
</head>
<body bgcolor="grey">;

<?php

$cars = array(array("volvo",25,18),
        array("bmw",20,14),
        array("odi",35,12),
        array("shiwft",25,10),
        array("dzaire",33,13),
        array("aulto",19,15));



for ($row=0; $row < 6; $row++) { 


	# code...
	echo "<ul>";
	echo "<p> <b> Row number $row </b></p>";
	

for ($col=0; $col < 3; $col++) { 
		# code...

	echo "<li>" .$cars[$row][$col]. "</li>";

	}	

	echo "<ul>"; 
}






















?>
</body>
</html>


