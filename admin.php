<?php
include "dbconnect.php";

if(isset($_GET['f']))
	{
		echo "<font color='red'>login incorrect</font>";
	}
?>

<html>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<head>
			 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>	
		body{
			background-color:lightblue;
		}
		.main{
			width:100%;
			height:100%;
		}
		.nav{
			width:100%;
			height:10%;
		}
		.admin{
				width:100%;
				height:40%;
			}
		
	</style>
</head>
<body>
<div class="main">
	<div class="nav">
			<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
			<div class="container">
			<a href=""class="navbar-brand text-danger font-weight-bold">Doodhwala</a>
			<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#collapsenavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center"id="collapsenavbar">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
			<a href="index.php"class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item dropdowm">
			<a class="nav-link text-white"href="about.php">About</a>
			 </li>

			<li class="nav-item">
			<a href="contactus.php"class="nav-link text-white">Contact us</a>
			</li>
			
			<li class="nav-item">
			<a href="admin.php"class="nav-link text-white">Admin</a>
			</li>
			
			</ul>
			</div>
			</div>
			</nav>
	</div>
	
	<div class="admin">
		<fieldset style="width:600px;" align="center">
		<legend>Admin login </legend>
			<form action="checkadmin.php" method="POST">
				UserName <input type="text" name="user"> <br>
				PassWord <input type="password" name="pass"> <br>
					<input type="submit" value="Login">	
			</form>
		</fieldset>
	</div>	
	</body>
</div>
</html>



