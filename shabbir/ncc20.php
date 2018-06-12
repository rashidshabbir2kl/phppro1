<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

table, th, td{

border: 1px solid red;
border-collapse: collapse;



}
th, td{


}



	</style>
	<title></title>
</head>
<body>
<table>


<tr>
<td> Filter Name</td>
<td> Filter Id</td>


</tr>

<?php

foreach (filter_list() as $id => $filter) {


echo '<tr><td>'.$filter.'<td><td>'.
filter_id($filter).'<td><tr>';
	
}

?>
</table>

</body>
</html>