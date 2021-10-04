<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,'celebconnect') or die(mysql_error());
echo"<br>";
echo("Connected to database");
//Create Table in Database celebconnect
mysqli_query($conn,"CREATE TABLE tblMembers(phoneNumber INT NOTNULL,PRIMARY KEY(phoneNumber),firstname VARCHAR (20),secondname	VARCHAR (20),username VARCHAR (20),DateOfBirth ,email VARCHAR(50),gender BOOLEAN,category BOOLEAN)");
?> 