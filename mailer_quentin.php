<?php

$to = "quentin.declercq@enseirb-matmeca.fr"; //connect with pdo to retrieve user email
$subject = "Beteirb Password";
$message = "Salut fdp \r\n".
			"\r\n".
			"L'envoi de mail fonctionne".
			"\r\n".
			salut nique ta mère
			
			"Cordialement,\r\n".
			"L'équipe Bet'eirb";
			test
$headers = "From: beteirb@enseirb-matmeca.fr" . "\r\n" .
			//"Reply-To: qdeclercq@enseirb-matmeca.fr" .
			"X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

?>
