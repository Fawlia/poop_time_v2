<?php

$pseudo = $cp = $ville = $msg = $email = "";
$nomError = $prenomError = $cpError = $villeError = $msgError = $emailError = "";


if (isset($_POST["pseudo"])){
	
	$pseudo = $_POST["pseudo"];
	if(empty($_POST["pseudo"]) || strlen($_POST["pseudo"]) < 3 )
			{
			echo "Votre pseudo est trop court";
			$prenomError = true;
			}
	else{
	echo $pseudo;
	}
		
		
}

if (isset($_POST["ville"])){
	
	$ville = $_POST["ville"];
	if(empty($_POST["ville"]) || strlen($_POST["ville"]) < 3 )
			{
			echo "Veuillez rentrer un nom de Ville valide";
			$villeError = true;
			}
	else{
	echo $ville;
	}
		
}

if (isset($_POST["cp"])){
	
	$cp = $_POST["cp"];
	
	if(empty($_POST["cp"]) || strlen($_POST["cp"]) < 5 || strlen($_POST["cp"]) > 5 || is_nan($_POST["cp"]))
			{
			echo "Veuillez rentrer un code postal valide";
			$cpError = true;
			}
	
	else{
	echo $cp;
	}
		
		
}

if (isset($_POST["email"])){
	
	$email = $_POST["email"];
	
	if(empty($_POST["email"]) || !preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
			{
			echo "Veuillez rentrer un email valide";
			$emailError = true;
			}
	else{
	echo $email;
	}
		
}

if (isset($_POST["msg"])){
	
	$msg = $_POST["msg"];
	
	if(empty($_POST["msg"]) || strlen($_POST["msg"]) < 16 )
			{
			echo "Veuillez rentrer un message plus long valide";
			$msgError = true;
			}
	else {
	echo $msg;
	}
		
}

if ($nomError == true || $prenomError == true || $cpError == true || $villeError == true || $msgError == true || $emailError == true)

{
	
	echo "IL Y A QUELQUE CHOSE DE POURRI DANS CE FORMULAIRE";
	
}

else {
	$message = " Prénom ".$pseudo." Ville ".$ville." Code Postal ".$cp." E-mail ".$email." Message : ".$msg;

	mail("yohann.thorez@gmail.com", "Envoi du formulaire", $message);
}

?>