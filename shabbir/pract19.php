<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method = "POST" enctype="multipart/form-data">
	<input type="file" name="image"/>
	<input type="submit">
</form>
<?php

if (isset($_FILES['image'])) {
	$error = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
	
$expensions = array("jpeg","jpg","png");
if (in_array($file_ext,$expensions)===false) {
	$error[]="extension not allowed,please choose a JPEG OR PNG file.";

	# code...
}
if ($file_size >2097152) {
	$error[]='file size must be excately 2MB';
	# code...
}
if (empty($error)==true) {
	move_uploaded_file($file_tmp,"images/".$file_name);
	echo "success";
}else{
	print_r($error);


}
}
?>
</body>
</html>




   

	
	











