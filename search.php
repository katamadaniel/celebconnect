<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html lang="en">
<head>
<meta charset ="UTF-8">	
<title>CELEBCONNECT| Search</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style">
  <meta charset="utf-8">
  <meta name= "viewport" content "width=device-width, initial-scale=1" >
  <script type="text/javascript" src='javascript.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap.css">
  <script type="text/javascript" src='javascript.js'></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs,cloudflare,coom/ajax/libs/font-awesome/4.0.7/css/font-awesome.min.css">
</head>
<body>
		<div class="container">
		<div id="container-fluid">
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
					<li><a href="music.html">Musician</a></li>
				<li><a href="movies.html">Actors</a></li>
				<li><a href="journalists.html">Journalists</a></li>
				<li><a href="sports.html">Athletes</a></li>
				</ul>
				</li>
				<li> <a href="login.html">Register</a></li>
			<li><a href="AboutUs.html">AboutUs</a></li>
			<li><a href="Contacts.html">ContactsUs</a></li>
		</ul>
		</nav>
		</div>
		<div id="body">
			<div id="content">
			<table width="300" height="100" align="center" cellspacing="1">
			<form action="search.php" method="GET">
			<tr><td><input type="text" name="k"  size='50' value='<?php echo $_GET['k'];?>'></td>
			<td><input id="button" type="submit" value="Search" ></td>
			</tr>
			</table>
			<hr/>
			<?php
			$k = $_GET['k'];
			$terms= explode(" ",$k);
			$query="SELECT * FROM search WHERE ";
			
			foreach ($terms as $each){
				$i++;
				if($i==1)
					$query .="keywords LIKE '%$each%' ";
				else
					$query .="keywords LIKE '%$each%' ";
			} 
							//connect to database
				mysql_connect("localhost","root"," ");
				mysql_select_db("celebconnect");
				
				$query=mysql_query($query);
				$numbrows= mysql_num_rows($query);
				if($numbrows>0){
					while($row = mysql_fetch_assoc($query)){
						$id= $row['id'];
						$UserName= $row['UserName'];
						$description= $row['description'];
						$keywords= $row['keywords'];
						$link= $row['link'];
						
						echo "<h3><a href='$link'>$title</a></h3>
						$description<br /><br />";
					}
				}
				else
					echo "No results found for \"<b>$k</b>\"";
				
				//disconnect
				mysql_close();

			?>
			</div>
			</div>
<div id="footer">
		<div>
		<p>&copy;<?php echo date("Y")?></p>
		</div>
		</div>
	</div>
</div>
				
</body>
</html>