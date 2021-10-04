<?php
include('check-user.php');
$fname= $_POST['Fname'];
$lname= $_POST['Lname'];
$User =$_POST['user'];
$DOB= $_POST['DOB'];
$email= $_POST['email'];
$phoneNumb= $_POST['number'];
$gender= $_POST['gender'];
$category= $_POST['category'];;
$password = $_POST['pass0'];
$password = $_POST['pass1'];

if(!empty($fname) || !empty($lname)|| !empty($User) || !empty($email) || !empty($phoneNumb) || !empty($gender) || !empty($category) || !empty($password)){
		$Servername = "localhost";
		$Username = "root";
		$Password = "";
		$dbName="celebconnect";
// Create connection
$conn = new mysqli($Servername, $Username, $Password, $dbName);
}
// Check connection
if ($myqli_connect_error()) {
    die('Connection failed('. myqli_connect_errno().')' .mysqli_connect_error());
}
		else{
			$SELECT= "SELECT Email FROM members WHERE Email= ? Limit=1";
			$INSERT= "INSERT INTO members(FirstName,LastName,UserName,DOB,Email,PhoneNumb,Gender,Category,password) VALUES(?,?,?,?,?,?,?,?,?)" ;
			
			//prepared statements
			$stmt= $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt ->num_rows;
			
			if($rnum ==0){
				$stmt ->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssdsiis",$fname,$lname,$User,$phoneNumb,$email,$gender,$category,$password);
				$stmt->execute(); 
				echo "New record inserted sucessfully!";
			}
			else{
			 echo	 "Email is already in use.";
			}
			$stmt->close();
			$conn->close();
		}
?>