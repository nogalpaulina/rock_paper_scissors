<?php

class RockPaperScissors
{
	function play($first_input, $second_input)
	{
		$rules = [
			"Rock" => "Scissors", 
			"Paper" => "Rock",
			"Scissors" => "Paper"
		] ;

		if ($rules[$first_input] == $second_input) {
			return "Player 1";
		} elseif ($rules[$second_input] == $first_input) {
			return "Player 2";
		} else {
			return "Draw";
		} 
	}
}
?>