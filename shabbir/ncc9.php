
<!DOCTYPE html>
<html>
<head>
	<title></title>


	<style type="text/css">
		

		.error{

			color: red;
		}
	</style>
</head>
<body bgcolor="grey">





<?php


//define empty variables  

$nameErr = $emailErr = $genderErr = $commentErr = $passwordErr = $addressErr = $mobileErr = $dropdownErr = $websiteErr = "";





$name = $email = $gender = $comment = $password = $address = $mobile = $dropdown  = $website = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if (empty($_POST["name"])) {

		$nameErr = "name is required";
	} else{

   $name = test_input($_POST["name"]);
   // comment check if name only contain lettars and white space
}





	 
	

	if (empty($_POST["email"])) {
		$emailErr = "email is required";
	} else{
		$email = test_input($_POST["email"]);
}




	if (empty($_POST["gender"])) {
		$genderErr = "gender is required";
	} else{
		$gender = test_input($_POST["gender"]);
}
		if (empty($_POST["comment"])) {
			$commentErr = "comment is required";
		} else{
			$comment = test_input($_POST["comment"]);
}

		if (empty($_POST["password"])) {
			$passwordErr = "Password is required";
		} else{
			$password = test_input($_POST["password"]);
}




		if (empty($_POST["address"])) {
			$addressErr = "address is required";
		}else{
			$address = test_input($_POST["address"]);
}


		if (empty($_POST["mobile"])) {
			$mobileErr = "mobile is required";
		} else{
			$mobile = test_input($_POST["mobile"]);
}


		if (empty($_POST["Course"])) {
			$dropdownErr = "dropdown is required";
		} else{
			$dropdown = test_input($_POST["course"]);

}

		if (empty($_POST["website"])) {
			$websiteErr = "website is required";
		} else{
			$website = test_input($_POST["website"]);
}



}		















function test_input($data){

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;







}

























?>

<fieldset>


<h2>Admission Form</h2>

<form method="post"action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Name :<input type="text" name="name"><span class="error">  <?php echo $nameErr;?></span>

	<br>
	<br>

	Email :<input type="text" name="email"><span class="error">  <?php echo $emailErr;?></span>

	<br>
	<br>

	Password:<input type="password" name="password"><span class="error">  <?php echo $passwordErr;?></span>
<br>
<br>
Address:<input type="type=" name="address"><span class="error"> <?php echo $addressErr;?></span>
<br>
<br>
Mobile No:<input type="type=" name="mobile"><span class="error">  <?php echo $mobileErr;?></span>
<br>
<br>


	Website :<input type="text" name="website"><span class="error">  <?php echo $websiteErr;?></span>

	<br>
	<br>
	Comment :<input type="text" name="comment"><span class="error">  <?php echo $commentErr;?></span>

	<br>
	<br>

	Choose Course:<select name="dropdown"><span class="error">  <?php echo $dropdownErr;?></span>
	<option value="HTML" selected>HTML</option>
	<option value="CSS3" selected>CSS3</option>
	<option value="JAVASCRIPT" selected>JAVASCRIPT</option>
	<option value="PHP" selected0>PHP</option>
	<option value="BOOTSTRAP" selected>BOOTSTRAP</option>
</select>



	<br>
	<br>

	Gender :<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="male"> Male



	<br>
	<br>

	<input type="submit">
	
</form>


</fieldset> 

<?php


echo $name;

echo "<br>";
 echo "<br>";


echo $email;

echo "<br>";
 echo "<br>";

echo $password;
echo "<br>";
 echo "<br>";





echo $website;
echo "<br>";

echo "<br>";

echo $address;
echo "<br>";
 echo "<br>";

 echo $mobile;
 echo "<br>";
echo "<br>";

echo $comment;
echo "<br>";
 echo "<br>";

echo $dropdown;
echo "<br>";
echo "<br>";


echo $gender;
echo "<br>";
 echo "<br>";





?>








</body>
</html>