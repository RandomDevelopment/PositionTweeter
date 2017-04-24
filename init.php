<?php

require("vendor/autoload.php");
require("functions.php");


use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => 'db.db'
]);


?>
