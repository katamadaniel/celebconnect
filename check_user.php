<?php
$Fname="";
$Lname="";
$user="";
$DOB="";
$email="";
$gender="";
$category="";
$errors=array(); 
//connect to database
$db=mysqli_connect('localhost','root','','celebconnect');
//if register button is clicked
if(isset($_POST['register'])){
	$Fname= mysql_real_escape_string($_POST['Fname']);
	$Lname=mysql_real_escape_string($_POST['Lname']);
	$user=mysql_real_escape_string($_POST['user']);
	$DOB=mysql_real_escape_string($_POST['DOB']);
	$email=mysql_real_escape_string($_POST['email']);
	$number=mysql_real_escape_string($_POST['number']);
	$gender=mysql_real_escape_string($_POST['gender']);
	$category=mysql_real_escape_string($_POST['category']);
	$pass0=mysql_real_escape_string($_POST['pass0']);
	$pass1=mysql_real_escape_string($_POST['pass1']);
	//ensure that form fields are filled properly
	if(empty($Fname)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($Lname)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($user)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($DOB)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($email)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($gender)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($category)){
		array_push($error,"Field cannot be empty");
	}
	if(empty($pass0)){
		array_push($error,"Password is required");
	}
	if(pass0!= pass1){
		array_push($error,"Passords do not match");
	}
	//save user to database if there are no errors
	if(count($errors)==0){
		$password=md5($pass1); //encrypt password before storing in the database
		$sql= "INSERT INTO celebmembers(FirstName,LastName,UserName,Date of Birth,Email,Phone Number,Gender,Category,Password)
		VALUES('$Fname','$Lname','$user','$DOB','$email','$gender','$category','$password)";
		mysqli_query($db,$sql);
		$_SESSION['Fname']=$Fname;
		$_SESSION['success']="Your have succesfully registered to celebconnect";
		header('location: dataform1.html'); //redirect to dataform to fill more data for wiki account.
	}
}
?>
