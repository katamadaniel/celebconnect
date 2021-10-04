<?php
$fname= filter_input($_POST,'Fname');
$lname= filter_input($_POST,'Lname');
$User =filter_input($_POST,'User');
$DOB= filter_input($_POST,'DOB');
$email= filter_input($_POST,'Email');
$phoneNumb= filter_input($_POST,'number');
$gender= filter_input($_POST,'gender');
$category= filter_input($_POST,'category');
$password = filter_input($_POST,'pass0');
$password = filter_input($_POST,'pass1');

if(!empty($fname)){
	if(!empty($lname)){
		if(!empty($User)){
			if(!empty($DOB)){
				if(!empty($phoneNumb)){
					if(!empty($gemder)){
						if(!empty($category)){
							if{!empty($password)}{
								$host="localhost";
								$dbusername="root";
								$dbpassword="";
								 $dbname="celebconnect";
								 
								 //conect to the database
								 $conn= new mysqli($host,$dbusername,$dbpassword,$dbname); 
								 
								 if(mysqli_connect_error()){
									 die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
								 }
								 else{
									 INSERT INTO members(FirstName,LastName,UserName,DOB,email,PhoneNumb,gender,category) 
									 VALUES($fname,$lname,$User,$DOB,$email,$phoneNumb,$gender,$category,$password);
								 }
							}
							else{
								echo "password cannot be empty";
							die();
							}
						}
						else{
							echo"Select a category";
							die();
						}
					}
					else{
						echo"Select gender";
						die();
				}
			}
			else{
				echo"Enter phone number";
				die();
			}
		}
		else{
			echo"Enter your date of birth";
			die();
		}
		}
		else{
			echo"User name cannot be empty";
			die();
		}
	}
	else{
		echo"Enter your Last name";
		die();
	}
}
else{
	echo"Enter your First name";
die();	
}
?>