<?php
	require 'vendor/autoload.php';

	$email = $_GET['email'];

	$from = new SendGrid\Email(null, "jhonatan_holanda@hotmail.com");
	$subject = "Livro Atrasado";
	$to = new SendGrid\Email(null,  $email);
	$content = new SendGrid\Content("text/html", "Olá, <br><br>Sua data de Entrega do Livro esta atrasada por favor Devolva!!");
	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	//Necessário inserir a chave
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);

	$response = $sg->client->mail()->send()->post($mail);
	echo '
		<script>
			alert("Mensagem Enviada!");
			setTimeout(function(){
				window.location = "atrasados.php";
			}, 500);
	 	</script>';

?>