<?php
	include "dbconnect.php";
	
	
	
	$q="select*from orderaddress";
	$r=mysqli_query($con,$q);
	echo "<table border='1'>
	<tr>
		<td>s_no</td>
		<td>c_date</td>
		<td>c_liter</td>
		<td>c_name</td>
		<td>c_mob</td>
		<td>c_email</td>
		<td>c_address</td>
		
	</tr>";
	while($a=mysqli_fetch_array($r)) //while($a=mysql_fetch_assoc($r))
	{
		echo "<tr>";
		echo "<td>".$a[0]."</td>";
		echo "<td>".$a[1]."</td>";
		echo "<td>".$a[2]."</td>";
		echo "<td>".$a[3]."</td>";
		echo "<td>".$a[4]."</td>";
		echo "<td>".$a[5]."</td>";
		echo "<td>".$a[6]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);

?>