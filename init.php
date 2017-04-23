<?php

	require "vendor/autoload.php";

require("functions.php");
$database = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => 'db.db'
]);

?>
