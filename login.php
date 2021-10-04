<?php include('check_connection.php');

    session_start();
      $username = $_POST['user'];
      $password = $_POST['pass']; 

    if ( isset ($_POST['password']) )
    {
     $connect = mysql_connect("localhost","root","") or die ("could'nt connect to db");
     mysql_select_db("celebconnect") or die ("can't connect");
	 
	 $sql = "SELECT * FROM `members` WHERE username='$username' AND password='$password' ";
     $result=mysql_query($sql);

     if(mysql_num_rows($result)==1)
     {
	 	 $sql = "SELECT * FROM `members`` LIMIT 1";
         session_regenerate_id();
    $_SESSION['IsValid'] = true;
	$_SESSION['FistName'] = $row['FistName'];
    $_SESSION['LastName'] = $row['LastName'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['PhoneNumb'] = $row['PhoneNumb'];
		 header('Location: home.html');
         //$_POST['result'];
    }else{
        header('Location:../login.html');
    }
 }

?>