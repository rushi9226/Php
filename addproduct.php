<?php

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$pname=$_POST['pname'];
	$packing_date=$_POST['paking'];
	
	echo "Reort : "."<br>"."<br>";
	echo "Product Id : ".$id."<br>";
	echo "Product Name : ".$pname."<br>";
	echo "Product Packing Date : ".$packing_date."<br>";
	$expiry=date('Y-m-d', strtotime("+6 months", strtotime($packing_date)));
	echo "Product Expiry Date : ".$expiry."<br>";
	$today=date("d-m-Y");
	$date_diff=abs(strtotime($today) - strtotime($packing_date));
	$years = floor($date_diff / (365*60*60*24));
	$month = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
	
	if ($month<=3) {
		echo "Quality of Product is Good."."<br>";	
	}
	elseif ($month<=4) {
		echo "Quality of Product is Average."."<br>";	
	}
	elseif ($month<=5) {
		echo "Quality of Product is Poor."."<br>";	
	}
	elseif ($month<=6) {
		echo "Quality of Product is Unusable.";	
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="Post" >
		<table>
			<tr>
				<td>Product Id</td>
				<td>:</td>
				<td><input type="text" name="id" placeholder="Enter Your Name" required=""></td>
			</tr>

			<tr>
				<td>Product Name</td>
				<td>:</td>
				<td><input type="text" name="pname" required=""></td>
			</tr>

			<tr>
				<td>Date of Packing</td>
				<td>:</td>
				<td><input type="date" name="paking" required=""></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>


	</form>

</body>
</html>