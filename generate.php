<?php

include_once __DIR__ . "/connection.php";

date_default_timezone_set('America/Bogota');

if(isset($_POST['add-user'])) {
	$document =  filter_var(trim($_POST['document']), FILTER_SANITIZE_NUMBER_INT);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$phone =  filter_var(trim($_POST['phone']), FILTER_SANITIZE_NUMBER_INT);
	$email =  filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$address =  filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
	$state =  filter_var(trim($_POST['state']), FILTER_SANITIZE_STRING);
	$city =  filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);

	if(empty($document) || empty($name) || empty($phone) || empty($email) || empty($address) || empty($state) || empty($city)) {
		header('Location: index.php?error=1');
	} else {
		// VALIDATE DOCUMENT NUMBER IF ALREADY EXISTS
		$find_document = 'SELECT * FROM users WHERE document = ?;';
		$statement = $connection->prepare($find_document);
		$statement->bindParam(1, $document, PDO::PARAM_INT);
		$response = $statement->execute();

		$user = $statement->fetch(PDO::FETCH_ASSOC);

		if($user) {
			header('Location: index.php?error=2');
		} else {
			$statement2 = $connection->prepare('INSERT INTO users(document, name ,phone, email, address, state, city) VALUES (?, ?, ?, ?, ?, ?, ?);');

			$statement2->bindParam(1, $document, PDO::PARAM_INT);
			$statement2->bindParam(2, $name, PDO::PARAM_STR);
			$statement2->bindParam(3, $phone, PDO::PARAM_INT);
			$statement2->bindParam(4, $email, PDO::PARAM_STR);
			$statement2->bindParam(5, $address, PDO::PARAM_STR);
			$statement2->bindParam(6, $state, PDO::PARAM_STR);
			$statement2->bindParam(7, $city, PDO::PARAM_STR);

			$result = $statement2->execute();

			if($result) {
				$code = $connection->lastInsertId();
				header("Location: index.php?code=$code");
				exit();
			} else {
				header('Location: index.php?error=2');
				exit();
			}
		}
	}
}

?>
