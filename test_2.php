<?php

//meedo tester
require "init.php";


use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => 'db.db'
]);




//print_r($database->info());


?>