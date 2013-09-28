<?php
$players["Ethel"] = NULL;
$players["Leroy"] = NULL;
$players["Sam"] = NULL;
$players["Sandy"] = NULL;

$winning_num = rand(1,4);
$num_of_winner = 0;
$name_of_winner = "";

foreach ($players as $key => $value) {
	$num = rand(1,4);
	if ($num == $winning_num) {
		$status = "Winner :)";
		$num_of_winner += 1;
		# name of winner is only used when there is ONE single winner
		$name_of_winner = $key;
	} else {
		$status = "Loser :(";
	}
	$players[$key] = $status;
}

if ( $num_of_winner == 0 ) {
	$message = "No winners this round";
} else if ( $num_of_winner == 1 ) {
	$message = "The single winner is $name_of_winner";
} else {
	$message = "It's a tie!";
}
?>