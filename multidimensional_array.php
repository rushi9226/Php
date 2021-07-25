<?php

	if(isset($_POST['submit'])){
		$game1=$_POST['game1'];
		$name1=$_POST['name1'];
		$score1=$_POST['score1'];
		$game2=$_POST['game2'];
		$name2=$_POST['name2'];
		$score2=$_POST['score2'];
		$game3=$_POST['game3'];
		$name3=$_POST['name3'];
		$score3=$_POST['score3'];
		$search=$_POST['search'];
		$arr = array(
			array('game' => $game1,
				  'name'=> $name1,
				  'score'=> $score1
			 ),
			array('game' => $game2,
				  'name'=> $name2,
				  'score'=> $score2

			),
			array('game' => $game3,
				  'name'=> $name3,
				  'score'=> $score3

			),

	);

		$a=array_search($search,array_column($arr,'game'));
        echo 'Position of game is '.$a;
		
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional Array</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Game1</td>
				<td>:</td>
				<td><input type="text" name="game1" placeholder="Enter Game"></td>	
			</tr>
			<tr>
				<td>Player Name1</td>
				<td>:</td>
				<td><input type="text" name="name1" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td>Score1</td>
				<td>:</td>
				<td><input type="number" name="score1" placeholder="Enter Score"></td>
			</tr>
			<br>
			<tr>
				<td>Game2</td>
				<td>:</td>
				<td><input type="text" name="game2" placeholder="Enter Game"></td>	
			</tr>
			<tr>
				<td>Player Name2</td>
				<td>:</td>
				<td><input type="text" name="name2" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td>Score2</td>
				<td>:</td>
				<td><input type="number" name="score2" placeholder="Enter Score"></td>
			</tr>
			<br>
			<tr>
				<td>Game3</td>
				<td>:</td>
				<td><input type="text" name="game3" placeholder="Enter Game"></td>	
			</tr>
			<tr>
				<td>Player Name3</td>
				<td>:</td>
				<td><input type="text" name="name3" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td>Score3</td>
				<td>:</td>
				<td><input type="number" name="score3" placeholder="Enter Score"></td>
			</tr>
			<tr>
				<td>Serching</td>
				<td>:</td>
				<td><input type="text" name="search" placeholder="Enter game you want to search"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>