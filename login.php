<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<b>Username :</b>
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<br>
		<b>Password</b>
		<input type="password" name="password" placeholder="Enter Password">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$name = $_POST['username'];
	$pass = $_POST['password'];


	if($name=="MCA" && $pass=="MCA")
	{	
		?>
      <script type="text/javascript">
         document.location.href = 'welcome.php';
      </script>

      <?php
	}

	else{
		?>
      <script type="text/javascript">
        document.location.href = 'fail.php';
      </script>

      <?php
	}

}
?>