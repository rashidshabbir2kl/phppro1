<?php



$cars = array(
array("volvo",25,18),
array("Bmw",22,18),
array("toyta",22,15),
array("Rover",22,30)
    
);


for ($row = 0; $row < 4; $row++){


	echo "<h1><b> Row number $row </b></h1>";
	echo "<ul>";
	for ($col = 0; $col < 3 ;$col++){

		echo "<li>" .$cars[$row][$col]."</li>";

}
echo "<ul>";
}
?>