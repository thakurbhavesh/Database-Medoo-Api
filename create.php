<?php

include('db.php');

$database->create("account", [
	"id" => [
		"INT",
		"NOT NULL",
		"AUTO_INCREMENT",
		"PRIMARY KEY"
	],
	"first_name" => [
		"VARCHAR(30)",
		"NOT NULL"
    ],
    "last_name" => [
		"VARCHAR(30)",
		"NOT NULL"
	],
    "email" => [
		"VARCHAR(30)",
		"NOT NULL",
        
	]
]);

// $database->drop("account");
?>