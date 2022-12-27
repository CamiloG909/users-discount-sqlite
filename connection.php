<?php

$connection= new PDO("sqlite:" . __DIR__ . "/users.db");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = "CREATE TABLE IF NOT EXISTS users(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	document INTEGER NOT NULL,
	name TEXT NOT NULL,
	phone INTEGER NOT NULL,
	email TEXT NOT NULL,
	address TEXT NOT NULL,
	state TEXT NOT NULL,
	city TEXT NOT NULL
);";

$response = $connection->exec($table);

?>
