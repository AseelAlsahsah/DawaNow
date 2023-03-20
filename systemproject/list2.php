<?php
if(isset($_POST['submit']))
{
  if ($_POST['search']=="panadol")
  {
    header('location:list2.php');
  }
  else{
    header('location:list.php');
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
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>SIGN UP</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
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
.input--style-99 {
    margin-left: -70%;
    padding: 10px 0;
    color: black;
    font-size: large;
}
input {
    outline: none;
    margin-left: -4px;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 100%;
    font-size: 14px;
    font-family: inherit;
    font-size: larger;
}
.modal-title {
    margin: 0;
    line-height: 1.42857143;
    font-size: large;
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
			  <button class="btn btn-default" type="submit"  style="border-radius:15px;height:0.8cm;width:1.8cm;" name="submit"> 
        
			
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
<div class="container">
	<div>
      <img src="list2.png" style="height:500px;position:absolute;top:85" width="1000px" >
    </div>
	<div>
      <p style="position:absolute;top:15.7cm;font-size:25pt">Or</p>
	  <button class="btn btn-primary btn-lg" type="submit" style="position:absolute;top:15.7cm;left:10.5cm;" data-toggle="modal" data-target="#exampleModal"> Request for the searched one  </button>
	  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
			<input type="text" placeholder="medicine name" name="mname[]">
			
			<div class="row row-space">
                            
								<div class="col-2">
                <div class="modal-body">
                                <input class="input--style-99" type="number" min="1" max="5" placeholder="amount" name="mamount">
								
                                </div>
                                </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ">request</button>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
</body>
</html>	
    