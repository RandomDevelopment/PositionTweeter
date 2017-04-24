<?php

//Gather and record test 
require "init.php";
$database->insert("Executions", ["Time" => time()]);
$rank = 0;
$exe = $database->count("Executions");


while($rank < 20){
	$rank++;
	$junk = topmclist_rank_grab($rank);
	$Name = $junk->data->name;
	$ID = $junk->data->ID;
	$database->insert("Server_Ranks", ["Server_ID" => $ID, "Rank" => $rank, "Execution" => $exe]);


	$Server_Ranks_By_Server_ID = $database->select("Server_Ranks", ["Server_ID","Rank", "Execution"] , ["Server_ID" => $ID]);
	$index="old";


	// check if we have more than execution with data for this server first! 
	$server_execution_count = 0;
	foreach ($Server_Ranks_By_Server_ID as $Grab) {
		$server_execution_count++;
	}
	if($server_execution_count > 1){
		// This makes an array with the last two excution collections
		foreach ($Server_Ranks_By_Server_ID as $Grab) {
			if($Grab["Execution"] == $exe || $Grab["Execution"] == $exe -1){
				$server_snapshot[$index] = $Grab;
				if($index == "old"){
					$index = "new";
				}
			}
		}

		if($server_snapshot["old"]["Rank"] > $server_snapshot["new"]["Rank"]){
			tweet("it appears ".$Name." moved from position ". $server_snapshot["old"]["Rank"]." to position ". $server_snapshot["new"]["Rank"]); 
		}
	}


}

echo "done!";




?>