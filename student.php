<?php

if(isset($_POST['submit1'])){

	$stu=$_POST['numofstudent'];
	$sub=$_POST['numofsubjects'];
		
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Marksheet</title>
</head>
<body>
<form method="post">
	
	<table>
		<tr>
			<td>Number of Students</td>
			<td>:</td>
			<td><input type="number" name="numofstudent" required=""></td>
		</tr>
		<tr>
			<td>Number of Subjects</td>
			<td>:</td>
			<td><input type name="numofsubjects" required=""></td>
		</tr>
		<tr>
				<td></td>
				<td><input type="submit" name="submit1" value="Submit"></td>
			</tr>
	</table>
</form>


<form method="post" action="marksheet.php?stu=$stu&sub=$sub">
	<?php
	if ($stu==TRUE && $sub==TRUE) {
		for ($i=1; $i<=$stu ; $i++) { 
			
			?>
			
				<table>
				<tr>
					<td style="font-weight: bolder;">Student<?php echo $i?> Data</td>
				</tr>	
				<tr>
					<td>Student ID</td>
					<td>:</td>
					<td><input type="number" name="studentid" required=""></td>
				</tr>
				<tr>
					<td>Student Name</td>
					<td>:</td>
					<td><input type="text" name="student" required=""></td>
				</tr>
				<?php
				for ($j=1; $j<=$sub ; $j++) { 
					?>

						<tr>
							<td>Subject[<?php echo $j ?>]</td>
							<td>:</td>
							<td><input type="number" name="marks"></td>
						</tr>
					<?php
				}

				?>
				

				</table>
				
			
			<?php
		}
	}
?>

	<tr>
		<td></td>
		<td><input type="submit" name="submit2" value="Submit"></td>
	</tr>
</form>

		

</body>
</html>