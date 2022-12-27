<?php

include_once __DIR__ . "/connection.php";

$query = 'SELECT * FROM users;';

$statement = $connection->query($query);
$users = $statement->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
var_dump($users);
echo "<pre />";
?>
