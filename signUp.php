<?php include('check_user.php');?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html lang="en">
<head>
<meta charset ="UTF-8">	
<title>CELEBCONNECT</title>
<meta name="viewport" content="width=device-width, intitial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
   <script type="text/javascript">
function validateForm()
{

var a=document.forms["signup"]["Fname"].value;
var b=document.forms["signup"]["Lname"].value;
var c=document.forms["signup"]["user"].value;
var d=document.forms["signup"]["DOB"].value;
var e=document.forms["signup"]["email"].value;
var f=document.forms["signup"]["number"].value;
var g=document.forms["signup"]["gender"].value;
var h=document.forms["signup"]["category"].value;
var i=document.forms["signup"]["pass0"].value;
var j=document.forms["signup"]["pass1"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if( i != j  || j !=i) {
alert("Password does not match");
  return false;
} 
if ((a==null || a=="") || (b==null || b=="") || (c==null || c=="") || (d==null || d=="") || (f==null || f=="") || (g==null || g=="")|| (e==null || e=="")|| (f==null || f=="") ||(i==null || i=="") || (j==null || j==""))
  {
  alert("All field are required!");
  return false;
  }
else
{
return true;
}
}
</script>
<!--sa input that accept number only-->
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#number").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});

  });
  </script>
</head>
<body>
<div  id="head">
<h1>CelebConnect</h1><hr>
</div>
	<div id="navbar">
		<nav>
		<ul id="menu">
			<li> 
			<a href="index.html">Home</a>
			</li>
			<li>
			<a href="categories.html">Categories</a>
				<ul>
				<link rel="stylesheet" type="text/css" href="css/style.css">
					<li><a href="music.html">Musicians</a></li>
				<li><a href="movies.html">Actors</a></li>
				<li><a href="journalists.html">Journalists</a></li>
				<li><a href="sports.html">Athletes</a></li>
				
				</ul>
				</li>
				<li> <a href="login.html">Register</a></li>
			<li><a href="AboutUs.html">AboutUs</a></li>
			<li><a href="Contacts.html">ContactsUs</a></li>
		</ul>
		</div>
		<div id="body">
			<div class="content">
						<h2>Register as a member</h2>
			  <ul class="section">
			    <li>
				
				   <div id="Sign-Up">
<fieldset style="width:50%"><legend>Please enter your correct details</legend> 

<form action="sign-up.php" method="POST" id="signup" name="signup" onsubmit="return validateForm">
	<!--display validation errors here -->
	<?php include(errors.php);?>
<div class="input-group">
<label>FirstName<label>
<input type="text" name="Fname"><span class="error">* <?php echo $fnameErr;?></span>
</div>
 
	<div class="input-group">
<label>LastName<label>
<input type="text" name="Lname" ><span class="error">* <?php echo $lnameErr;?></span>
</div>

	<div class="input-group">
<label>UserName<label>
<input type="text" name="user"><span class="error">* <?php echo $UnameErr;?></span>
</div>

	<div class="input-group">
<label>Date of Birth<label> 
<input type="date" name="DOB"><span class="error">* <?php echo $DobErr;?></span>
</div>

	<div class="input-group">
<label>Email<label>
<input type="email" name="email"><span class="error">* <?php echo $emailErr;?></span>
</div>

	<div class="input-group">
<label>Phone Number<label>
<input type="text" name="number"><span class="error">* <?php echo $phoneNumbErr;?></span>
</div>

	<div class="input-group">
<label>Gender<label>
<input type="radio" name="gender">Male <br>
<input type="radio" name="gender">Female<span class="error">* <?php echo $genderErr;?></span>
</div>

	<div class="input-group">
<label>Category<label>
<input type="radio" name="category">Musicians<br>
<input type="radio" name="category">Actor <br>
<input type="radio" name="category">Journalist<br> 
<input type="radio" name="category">Sports<span class="error">* <?php echo $categoryErr;?></span><br> 
</div>

	<div class="input-group">
<label>Password<label>
 <input type="password" name="pass0"><span class="error">* <?php echo $passwdErr;?></span>
</div>

	<div class="input-group">
<label>Confirm Password <label>
<input type="password" name="pass1"><span class="error">* <?php echo $passwdErr;?></span>
</div>

	<div class="input-group">
<button type="submit"input name="register" class="btn">SignUp<button>
</div>
</form>
</fieldset>
</div>
<div id="footer">
		<div>
		<p>&copy;<?php echo date("Y")?></p>
		</div>
</body>
</html>