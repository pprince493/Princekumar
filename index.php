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
				background-image:url("indeximg.png");
				background-repeat:no-repeat;
				background-position:center top;
				background-attachment:fixed;
				background-size:100% 100%;
				
			}
	
		
		.order{
			width:100%;
			height:10%;
			border-color:red;
			text-align:center;
		}
		.button{
			position : absolute;
			top:85%;
			left: 45%;
			right:45%;
			background-color:#008CBA;
			font-size:20px;
			padding:16px;
			border-radius:80px;
		}
		
	</style>
	<script>
		function login(){
			window.location.href="orderaddress.php";  
		}
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
<div class="container">
<a href=""class="navbar-brand text-danger font-weight-bold">Doodhlelo</a>
<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#collapsenavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse text-center"id="collapsenavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a href="index.php"class="nav-link text-white">Home</a>
</li>
<li class="nav-item dropdowm">
<a href="aboutus.php"class="nav-link text-white">About</a>
</li>
<li class="nav-item">
<a href=""class="nav-link text-white">Contact us</a>
</li>
<li class="nav-item">
<a href="admin.php"class="nav-link text-white">Admin</a>
</li>
</ul>
</div>
</nav>
	<div class="order">
			<button onclick="login()" class="button">Order Now</button>
	<div>

</body>
<html>