<?php
$username="root";
$password="";
$server="localhost";
$db="dailyseva";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
echo"connection successfull";
}
else{
echo"no connection";
}
?>