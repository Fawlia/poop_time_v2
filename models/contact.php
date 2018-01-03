<?php

$pseudo= $ville = $msg = $email = "";
$pseudoError = $villeError = $msgError = $emailError = "";


if (isset($_POST["pseudo"])){
	
	$pseudo = $_POST["pseudo"];
	if(empty($_POST["pseudo"]) || strlen($_POST["pseudo"]) < 3 )
			{
			echo "Votre pseudo est trop court";
			$prenomError = true;
			}
	
		
}

if (isset($_POST["ville"])){
	
	$ville = $_POST["ville"];
	if(empty($_POST["ville"]) || strlen($_POST["ville"]) < 3 )
			{
			echo "Veuillez rentrer un nom de Ville valide";
			$villeError = true;
			}
	
		
}


if (isset($_POST["email"])){
	
	$email = $_POST["email"];
	
	if(empty($_POST["email"]) || !preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
			{
			echo "Veuillez rentrer un email valide";
			$emailError = true;
			}
	
		
}

if (isset($_POST["msg"])){
	
	$msg = $_POST["msg"];
	
	if(empty($_POST["msg"]) || strlen($_POST["msg"]) < 16 )
			{
			echo "Veuillez rentrer un message plus long valide";
			$msgError = true;
			}
	
}

if ($pseudoError == true || $villeError == true || $msgError == true || $emailError == true)

{
	
	echo "IL Y A QUELQUE CHOSE DE POURRI DANS CE FORMULAIRE";
	
}

else {
	$message = " Pseudo ".$pseudo." Ville ".$ville." E-mail ".$email." Message : ".$msg;
	
	echo "Merci beaucoup. L'équipe de Poop_time va vous répondre dès que possible";

	mail("yohann.thorez@gmail.com", "Envoi du formulaire", $message);
	header("refresh:3;url=https://yohannt.promo-5.codeur.online/poop_time_v2");
}

?>