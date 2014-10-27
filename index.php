<?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 5. praktikum</title>
	<style>
		.form_field{
			margin-top:10px;
		}
		.form_message{
			font-weight:bold;
		}
	</style>
</head>
<body>
	<div class="form_message">
				<?php 
					if ($isSubmitted) {
						echo $usernameMessage;
				}
					if ($isSubmitted) {
						echo $ageMessage;
				}
					if ($isSubmitted) {
						echo $drinkMessage;
				}	
					if ($isSubmitted) {
						echo $emailMessage;
				}
	      
				?>
	</div>	
	<form action="index.php" method="post">
		<span>Kasutajanimi:</span>
			<input type="text" name="username">
			<br>
		<span>Vanus:</span>
			<input type="text" name="age">
			<br>
		<span>Joogid:</span>
			<input type="text" name="drink">
			<br>	
		<span>Email:</span>
			<input type="text" name="email">
		<div class="form_field">
			<input type="submit" name="submit" value="Saada">
		</div>
	</form>
	<pre><?php print_r($_POST); ?></pre>
</body>
</html>
		