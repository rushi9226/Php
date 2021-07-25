<?php

	if (isset($_POST['submit2'])) {

		$id[]=$_POST['id'];
		$name[]=$_POST['name'];
		$marks[][]=$_POST['marks'];

	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="width:500px;height:100px;border:1px solid #000;">
			<?php
			for ($i=1; $i<=$stu ; $i++){
				echo "Id : ".$studentid[$i];
				echo "Name : ".$student;
				for ($j=1; $j<=$sub ; $j++) { 
					echo $marks[$i][$j];
					$total=$_total+$marks[$i][$j];
				}
				
				$result=$total*100/($sub*100);
			}


			?>
		</div>
</body>
</html>