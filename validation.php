<?php
	$isSubmitted = isset($_POST["submit"]);
	if ($isSubmitted) {
		$username = $_POST["username"];
	}
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
	}
	  if (!isset($username) || $username == "") {
	    $usernameMessage = '<div class="form-message">Nime väli ei vasta nõuetele</div>';
	  } else {
	    $usernameMessage = '<div class="form-message">Täname korrektselt sisesatud nime eest!</div>';
	  }
 ?>