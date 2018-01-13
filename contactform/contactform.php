<?php
	if (isset($_POST["email"])){
		$email = $_POST["email"];
	}
	if (isset($_POST["name"])){	
		$name = $_POST["name"];
	}
	if (isset($_POST["subject"])){	
		$subject = $_POST["subject"];
	}
	if (isset($_POST["message"])){	
		$message = $_POST["message"];
	}

	$to = "solidajenjo@gmail.com";
	$headers = "From:";

	$mail_sent = @mail( $to, $subject, "Mensaje recibido en el portfolio de:".$name."\n".$email."\n\nMensaje:\n".$message, $headers );

	header('Location: contact-form-thank-you.html');

?>