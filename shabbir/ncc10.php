<!doctype html>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body bgcolor="grey">

<?php
//define empty variable
$nameErr = $emailErr = $commentErr = $passwordErr = $addressErr = $mobileErr = $genderErr = $dropdownErr = $websiteErr = "";

$name = $email = $gender = $comment = $password = $address = $mobile = $course = $website = "";



if (empty($_POST["name"])) {
	$nameErr = "name is required"; //comment check if name only contain letter and white space
} else {

	$name = test_input($_POST["name"]);
	# code...


if (!preg_match("/^[a-z A-Z]*$/",$name)) {
	$nameErr = "only letter and whitespace allowed";
}
}






if (empty($_POST["email"])) {
	$emailErr = "email is required";
} else {
	
	# code...
$email = test_input($_POST["email"]);
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	$emailErr = "invailid email formate";
	
	}	
}





if (empty($_POST["password"])) {
	$passwordErr = "password is required";
} else {
	
	$password = test_input($_POST["password"]);
	if (!preg_match("/^[a-z A-Z]*$/",$password)) {
		$passwordErr = "only letter and whitespace allowed";
		# code...
	}
	# code...
}







if (empty($_POST["address"])){
$addressErr = "address is required";
} else {

$address = test_input($_POST["address"]);

if (!preg_match("/^[a-z A-Z]*$/",$address)) {
	$addressErr = "only letter and whitespace allowed";
	# code...
}

}
 













if (empty($_POST["mobile"])) {
$mobileErr = "mobile is required";
} else {
	
	$mobile = test_input($_POST["mobile"]);
	if (!preg_match("/^[a-z A-Z]*$/",$mobile)) {
		$mobileErr = "only letter and whitespace allowed";
		# code...
	}

	# code...
}












if (empty($_POST["gender"])) {
$genderErr = "gender is required";
} else {

$gender = test_input($_POST["gender"]);

if(!preg_match("/^[a-z A-Z]*$/",$gender)) {

$genderErr = "only letter and whitespace allowed";
	# code...
}




}

	# code...
















if (empty($_POST["comment"])) {
$commentErr = "comment is required";
} else {

	


	$comment = test_input($_POST["comment"]);
	if (!preg_match("/^[a-z A-Z]*$/",$comment)) {
$commentErr = "only letter and whitespace allowed";

		# code...
	}
}



	# code...













if (empty($_POST["website"])) {
	$websiteErr = "website is required";
} else {
	

	$website = test_input($_POST["website"]);
if (!preg_match("/^[a-z A-Z]*$/",$website)) {
$website = "only letter and whitespace allowed";

	# code...
}




	# code...
}









if (empty($_POST["course"])) {
	$dropdownErr = "course is required";
} else {
	$course = test_input($_POST["course"]);
	if (!preg_match("/^[a-z A-Z]*$/",$course)) {
		$dropdownErr = "only letter and whitespace allowed";
		# code...
	}
	# code...
}











function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
<fieldset>
	<h2>admission form</h2>
	<form method ="post"action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name :<input type="text" name="name"><span class="error"> <?php echo $nameErr;?></span>
<br>
<br>

Email :<input type="text" name="email"><span class="error"> <?php echo $emailErr;?></span>
<br>
<br>




Comment :<input type="text" name="comment"><span class="error"> <?php echo $commentErr;?></span>
<br>
<br>

Password :<input type="password" name="password"><span class="error"> <?php echo $passwordErr;?></span>
<br>
<br>

Address :<input type="text" name="address"><span class="error"> <?php echo $addressErr;?></span>
<br>
<br>

Mobile No :<input type="text" name="mobile"><span class="error"> <?php echo $mobileErr;?></span>
<br>
<br>


Website :<input type="text" name="website"><span class="error"> <?php echo $websiteErr;?></span>
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

Gender :<input type="radio" name="gender" value="female">Female
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

echo $gender;

echo "<br>";
echo "<br>";

echo $comment;

echo "<br>";
echo "<br>";

echo $password;

echo "<br>";
echo "<br>";

echo $address;

echo "<br>";
echo "<br>";

echo $mobile;

echo "<br>";
echo "<br>";

echo $website;

echo "<br>";
echo "<br>";

echo $course;

echo "<br>";
echo "<br>";



?>
</body>
</html>










































