<?php
if(isset($_POST['submit']))
{
	if(empty($_POST['search']))
		header('location:homepage.php');
	else{
  if ($_POST['search']=="panadol")
  {
    header('location:list2.php');
  }
  else{
    header('location:list.php');
  }
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Home </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .nav 
      {
        font-size:1.5em;
      }
    .navbar-brand 
    {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 30px;
    line-height: 20px;
    }
    .input-group{
        position:absolute;
        left:45%;
        width:500px;
    }
    .logo {
    border: 0;
    width: 90px;
    top: -2px;
    position: absolute;
    height: 55px;
}
.div1
{
}
.div1 h1
{
	position:absolute;
	top:7cm;
	left:2cm;
	font-family:DejaVu Sans Mono, monospace;
	color:white;
	font-weight: bold;
}
#sbox{
	border-radius:15px;
	height:1cm;
	width:10cm;
}
#button1
{
	position:absolute;
	top:10.5cm;
	left:10cm;
	width:5cm;
	color:white;
	background-color:#b8c1cf;
	
}
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php"> <img class="logo" src="images\LogoMakr.png"> </a>
    </div>
	<form class="navbar-form navbar-left" style="position:absolute;left:12cm;top:-2px;" action="homepage.php" method="Post">
		  <div class="input-group">
			<input type="text" class="form-control" placeholder="Search for a medicine before visiting your pharmacy" name="search" id="sbox">
			<div class="input-group-btn">
			  <button class="btn btn-default" type="submit"  style="border-radius:15px;height:0.8cm;width:1.8cm;" name="submit" > 
        
			
				<i class="glyphicon glyphicon-search"></i>
			  </button>
        
			</div>
		  </div>
		</form>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
    </ul>

  </div>
</nav>
<div class="div1">
	<img src="images\div1b.png" width="100%" height="580px">
	
	<h1>We bring the pharmacy to your doorstep </h1>
	<button class="btn btn-default" id="button1" type="submit" onclick="document.location='orderform.php'">Order now
	</button>
	    
</div>
</body>
</html>