<?php
$name = $_POST["name"];
$email = $_POST["email"];
$assunto =$_POST["assunto"];
$message = $_POST["mensagem"];

$to = "momadejunior584@gmail.com";
$subject = $assunto;
$txt = $message;
$headers = 'From: '.$email. "\n";;

mail($to,$subject,$txt,$headers);

?>


<!DOCTYPE html>
<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="post">
		<input type="text" name="name" placeholder="nome"><br>
		<input type="text" name="assunto" placeholder="assunto"><br>
		<input type="text" name="email" placeholder="email"><br>
		<textarea type="text" name="mensagem" placeholder="email" row="5"></textarea><br>
		<input type="submit" name="submit" value="enviar">
	</form>
</body>
</html>