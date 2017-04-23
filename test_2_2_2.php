<?php

//topmclist tester


require "init.php";

function html($html = ""){
	global $config;
	if($config["Minify"] == true){
		echo trim($html);
	}
	else{
		echo $html."\n";
	}
}

// gross ass bootstrap 
html("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">");
html("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">");
html("<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>");



html("<br>");

$int = 0;


while($int < 9){
	$int++;
	$junk = topmclist_rank_grab($int);
	html("<pre>");
	print_r($junk);
	html("</pre>");
	html("<br>");
}



$junk = topmclist_rank_grab(1);
html("<pre>");
print_r($junk);
html("</pre>");




?>