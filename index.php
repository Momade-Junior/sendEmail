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
