<?php
include "dbconnect.php";
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
			height:100%;
			width:100%
		}
		.nav{
			width:100%;
			height:10%;
		}
		.order{
				width:100%;
				height:50%;
			}
		
	</style>
</head>
		<script>
				function validation(){
				
				var a=document.getElementById("liter").value;
				var b=document.getElementById("mobile").value;
				var c=document.getElementById("email_id").value;
				var d=document.getElementById("address_id").value;
				
				if(a=="")
				{
				document.getElementById("message").innerHTML="**Please  fill quantity of milk";
				return false;
				}
				if(b=="")
				{
				document.getElementById("mobile_n").innerHTML="**Please enter the mobile  number";
				return false;
				}
				if(c=="")
				{
				document.getElementById("email").innerHTML="**Please enter the mobile  number";
				return false;
				}
				if(d=="")
				{
				document.getElementById("address").innerHTML="**Please enter the address";
				return false;
				}
				}

		</script>
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
		
		<div class="order">
			<div class="container">
					<form action="" method="POST"onclick="return validation()">

					<h1><center>Order Now</h1></center>
					<div class="form-group">
					Select Liter<input type="number" step="0.5" name="liter"id="liter"value=""class="form-control"><span id="message"></span></div>
					<div class="form-group">
					Enter Name<input type="text" name="name"class="form-control"></div>
					<div class="form-group">
					Enter Mobile Number<input type="text" name="mobile_number"id="mobile"value=""class="form-control"><span id="mobile_n"></span></div>
					<div class="form-group">
					Enter Email adress<input type="email" name="email"id="email_id"class="form-control"><span id="email"></span></div>
					<div class="form-group">
					Address<input type="text" name="address" name="address"id="address_id"class="form-control"><span id="address"></span></div>
					<div class="form-group">
					 <input type="submit" value="Continue to checkout" class="btn btn-primary"name="submit">
					 </div>

					</form>
</div>
		</div>
<?php
if(isset($_POST["submit"]))
{
	//$date=$_POST['date'];
		$liter=$_POST['liter'];
			$name=$_POST['name'];
				$mobile_number=$_POST['mobile_number'];
					$email=$_POST['email'];
						$address=$_POST['address'];
	$insertquery=("insert into orderaddress(c_liter,c_name,c_mob,c_email,c_address)values('$liter','$name','$mobile_number','$email','$address')");
             $res=mysqli_query($con,$insertquery);
         if($res)
{
	?>
<script>
alert("your order is Accepted we are contact soon as possible");
</script><?php	
}
else{
?>
<script>
alert("please fill correctly");
</script><?php
}
}
?>
</div>
</body>
</html>
