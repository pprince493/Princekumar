<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	if($username=="pprincekumarjha493@gmail.com" && $password=="Prince@493")
	{
		// echo "login correct";
		header("location:admindbconnect.php");
	}
	else
	{
		echo "login incorrect";
		// header("location:lession28.php?f=1");
	}
?>