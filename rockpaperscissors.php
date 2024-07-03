<?php
//the game core
function play($player1,$player2) {
	if($player1 == $player2) return "Draw!";
	$ruleset = [
		"rock" => "scissors",
		"paper" => "rock",
		"scissors" => "paper"
	];
	if($player1 == $ruleset[$player2]){
		return "Player 2 won!";
	} else {
		return "Player 1 won!";
	}
}

//test to verify

$playsets = [
	["rock","paper"],
	["rock","scissors"],
	["rock","rock"],
	["paper", "paper"],
	["paper", "rock"],
	["paper", "scissors"],
	["scissors", "paper"],
	["scissors", "scissors"],
	["scissors", "rock"]
];

//test results
foreach($playsets as $playset) {
	echo "Player1->".implode(" - ",$playset)."<-Player2".PHP_EOL;
	echo play($playset[0],$playset[1]);
	echo PHP_EOL;

}
