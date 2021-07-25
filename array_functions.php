<?php 
	if (isset($_POST['submit'])) {
		$v1=$_POST['v1'];
		$v2=$_POST['v2'];
		$v3=$_POST['v3'];
		$v4=$_POST['v4'];
		$v5=$_POST['v5'];
		$v6=$_POST['v6'];

		$list = array($v1,$v2,$v3,$v4,$v5,$v6);
		echo "Array :"."<br>";
		foreach ($list as $key => $value) {
			echo $value."<br>";
		}
		echo "<br>";
		echo "legth of each Array value :"."<br>";
		foreach ($list as $key => $val) {
    		echo strlen($val)."<br>";
		}
		
		echo "<br>";
		echo "reverse of array values:"."<br>";
		foreach ($list as $key => $val) {
    		echo strrev($val)."<br>";
		}


		echo "<br>";
		sort($list);
		echo "Sorted Array :"."<br>";
		foreach ($list as $key => $val) {
    		echo $val."<br>";
		}

		echo "<br>";
		asort($list);
		echo "Sorted Array in ascending order :"."<br>";
		foreach ($list as $key => $val) {
    		echo $val."<br>";
		}

		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Value1</td>
				<td>:</td>
				<td><input type="text" name="v1" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td>Value2</td>
				<td>:</td>
				<td><input type="text" name="v2" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td>Value3</td>
				<td>:</td>
				<td><input type="text" name="v3" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td>Value4</td>
				<td>:</td>
				<td><input type="text" name="v4" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td>Value5</td>
				<td>:</td>
				<td><input type="text" name="v5" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td>Value6</td>
				<td>:</td>
				<td><input type="text" name="v6" placeholder="Enter Value"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>