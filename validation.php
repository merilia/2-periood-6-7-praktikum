<?php
	$isSubmitted = isset($_POST["submit"]);
	if ($isSubmitted) {
		$username = $_POST["username"];
	}
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$age = $_POST["age"];
		$drink = $_POST["drink"];
		$email = $_POST["email"];
	}
	$min=2;
	$max=20;
	  if (!isset($username) or $username == "") {
	    $usernameMessage = '<div class="form_message form_error" style="color:red">Kasutajanime väli ei tohi olla tühi.</div>';
	  } elseif (strlen($username) < $min) {
		$usernameMessage= '<div class= "form_message form_error" style="color:red">Kasutajanimi peab olema vähemalt ' .  $min  . ' tähemärki pikk</div>';
	  } elseif (strlen($username) > $max) {
		$usernameMessage= '<div class= "form_message form_error" style="color:red">Kasutajanimi ei tohi olla pikem kui ' .  $max  . ' tähemärki</div>';
	  }
	  else {
	    $usernameMessage = '<div class="form_message form_notice"  style="color:green">Täname korrektselt sisestatud nime eest!</div>';
	  }


	  if (isset($age) and !is_numeric($age)) {
		$ageMessage= '<div class= "form_message form_error" style="color:red"> Vanus peab olema numbriline väärtus </div>';
	  } else {
		$ageMessage= '<div class= "form_message form_notice" style="color:green"> Vanus sobis!</div>';
	  }


	  $drinks = array("vesi", "mahl", "tee", "vein");
		if (isset ($drink) and in_array($drinks, $drinks))
		{
		$drinkMessage= '<div class= "form_message form_error" style="color:red">Jook ei sobi menüüsse.</div>';
	  	} else {
		$drinkMessage= '<div class= "form_message form_notice" style="color:green">Jook on lisatud menüüsse.</div>';
	  	}


	  if (isset($email) and preg_match("/@/", $email)) {
		$emailMessage= '<div class= "form_message form_error" style="color:red">E-mail on valesti sisestatud. Palun proovige uuesti.</div>';
	  } else {
		$emailMessage= '<div class= "form_message form_notice" style="color:green">E-mail sobis!</div>';
      }

 ?>