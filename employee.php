<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration</title>
</head>
<body>
	<form method="Post" action="emp_data.php">
		<table>
			<tr>
				<td>Employee Name </td>
				<td>:</td>
				<td><input type="text" name="name" placeholder="Enter Your Name" required=""></td>
			</tr>

			<tr>
				<td>Birthdate </td>
				<td>:</td>
				<td><input type="date" name="dob" required=""></td>
			</tr>

			<tr>
				<td>Date of Joining</td>
				<td>:</td>
				<td><input type="date" name="doj" required=""></td>
			</tr>

			<tr>
				<td>Salary</td>
				<td>:</td>
				<td><input type="text" name="salary" required=""></td>
			</tr>

			<tr>
				<td>Designation</td>
				<td>:</td>
				<td><select name="designation">
						<option value="0" selected>Select Desigation</option>
						<option value="CEO">CEO</option>
						<option value="Manager">Manager</option>
						<option value="Accountant">Accountant</option>
						<option value="Analyst">Analyst</option>
						<option value="Developer">Developer</option>
						<option value="Tester">Tester</option>
						<option value="Receptionist">Receptionist</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Area of Interest</td>
				<td>:</td>
				<td><input type="text" name="aoi" required=""></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td>:</td>
				<td><input type="text" name="contact" required=""></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>


	</form>

</body>
</html>