<?php

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$doj=$_POST['doj'];
		$salary = $_POST['salary'];
		$designation = $_POST['designation'];
		$aoi = $_POST['aoi'];
		$contact=$_POST['contact'];
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
</head>
<body>

	<center>
		<h2>Employee Data</h2>
	<table border="3px">
		
		<thead>
			<th>Employee Name</th>
			<th>Date of Birth</th>
			<th>Date of Joining</th>
			<th>Salary</th>
			<th>Designation</th>
			<th>Area of Interest</th>
			<th>Contact Number</th>
		</thead>
		<tr>
			<td><?php echo $name ?></td>
			<td><?php echo $dob ?></td>
			<td><?php echo $doj ?></td>
			<td><?php echo $salary ?></td>
			<td><?php echo $designation ?></td>
			<td><?php echo $aoi ?></td>
			<td><?php echo $contact ?></td>
		</tr>

	</table>
	</center>
</body>
</html>