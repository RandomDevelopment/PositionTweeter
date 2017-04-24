<?php

//Gather and record test 
require "init.php";
$database->insert("Executions", ["Time" => time()]);
$rank = 0;
$exe = $database->count("Executions");


while($rank < 10){
	$rank++;
	$junk = topmclist_rank_grab($rank);
	$Name = $junk->data->name;
	$ID = $junk->data->ID;
	$database->insert("Server_Ranks", ["Server_ID" => $ID, "Rank" => $rank, "Execution" => $exe]);
}

?>