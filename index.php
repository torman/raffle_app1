<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
	<title>raffle v1</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<?php
		require_once('logic.php');
	?>
	</head>

	<body>
		<h1> Raffle V1 </h1>
		<h2> Refresh to play again </h2>
		
		The winning number is <?php echo $winning_num ?>
		</br>
			
		<?php	
		foreach ($players as $key => $value) {
			echo $key." "
		?>
			is a <?php echo " ".$value ?> </br>
		<?php } ?>	
		</br>
		<?php echo $message ?>

	</body>
</html>