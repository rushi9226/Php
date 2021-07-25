<?php

$products = array("notebook", "pen", "pencil","eraser");
$list=implode(", ", $products);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Array in PHP</title>
</head>
<body>
	
	<?php
	print($list);
	?>
	
	<ul>
		<?php
		foreach ($products as $value) {
		?>
		<li>
			<?php echo $value ?>
		</li>
		<?php
	}
	?>
	</ul>
</body>
</html>