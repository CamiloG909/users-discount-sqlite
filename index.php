<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#1CCC5B" />
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<title>10% OFF</title>
</head>
<body>
	<main>
		<div class="container container-home">
			<h1 class="title">SIGN UP AND GET 10% DISCOUNT</h1>
			<div class="flex">
				<form class="discount-form" method="POST" action="generate.php">
					<?php
					if(isset($_GET['error'])){
						if($_GET['error'] == 1) {
							echo "<div class='message --error'>Please fill all the fields</div>";
						} else if ($_GET['error'] == 2) {
							echo "<div class='message --error'>User already exists</div>";
						}
					}
					if(isset($_GET['code'])) {
						echo "<div class='message --success'>Congratulations! Your coupon is: " . $_GET['code'] . "</div>";
					}
					?>
					<input type="number" name="document" class="discount-form__text" placeholder="Your document number">
					<input type="text" name="name" class="discount-form__text" placeholder="Your name">
					<input type="number" name="phone" class="discount-form__text" placeholder="Your phone number">
					<input type="email" name="email" class="discount-form__text" placeholder="Your email">
					<input type="text" name="address" class="discount-form__text" placeholder="Your address">
					<select class="discount-form__text" name="state">
						<option value="" default>Select state</option>
						<option value="Amazonas">Amazonas</option>
						<option value="Antioquia">Antioquia</option>
						<option value="Arauca">Arauca</option>
						<option value="Atlántico">Atlántico</option>
						<option value="Bolívar">Bolívar</option>
						<option value="Boyacá">Boyacá</option>
						<option value="Caldas">Caldas</option>
						<option value="Caquetá">Caquetá</option>
						<option value="Casanare">Casanare</option>
						<option value="Cauca">Cauca</option>
						<option value="Cesar">Cesar</option>
						<option value="Chocó">Chocó</option>
						<option value="Córdoba">Córdoba</option>
						<option value="Cundinamarca">Cundinamarca</option>
						<option value="Guainía">Guainía</option>
						<option value="Guaviare">Guaviare</option>
						<option value="Huila">Huila</option>
						<option value="La Guajira">La Guajira</option>
						<option value="Magdalena">Magdalena</option>
						<option value="Meta">Meta</option>
						<option value="Nariño">Nariño</option>
						<option value="Norte de Santander">Norte de Santander</option>
						<option value="Putumayo">Putumayo</option>
						<option value="Quindío">Quindío</option>
						<option value="Risaralda">Risaralda</option>
						<option value="San Andrés y Providencia">San Andrés y Providencia</option>
						<option value="Santander">Santander</option>
						<option value="Sucre">Sucre</option>
						<option value="Tolima">Tolima</option>
						<option value="Valle del Cauca">Valle del Cauca</option>
						<option value="Vaupés">Vaupés</option>
						<option value="Vichada">Vichada</option>
					</select>
					<input type="text" name="city" class="discount-form__text" placeholder="Your city">
					<button class="discount-form__btn" name="add-user">
						REGISTER <i class="bi bi-magic"></i>
					</button>
				</form>
				<section class="discount-img">
					<img src="assets/woman_bg.png" alt="10 DISCOUNT WOMEN BG">
				</section>
			</div>
		</div>
	</main>
</body>
</html>
