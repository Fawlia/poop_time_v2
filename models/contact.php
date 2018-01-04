<?php

$error = [];
$error['pseudo'] = $error['ville'] = $error['email'] = $error['msg'] = "";


if (isset($_POST["pseudo"])){
	
	$pseudo = $_POST["pseudo"];
	if(empty($_POST["pseudo"]) || strlen($_POST["pseudo"]) < 3 )
		{
			$error['pseudo'] = true;
		}		
}

if (isset($_POST["ville"])){
	
	$ville = $_POST["ville"];
	if(empty($_POST["ville"]) || strlen($_POST["ville"]) < 3 )
		{
			$error['ville'] = true;
		}
}


if (isset($_POST["email"])){
	
	$email = $_POST["email"];
	
	if(empty($_POST["email"]) || !preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
		{
			$error['email'] = true;
		}
}

if (isset($_POST["msg"])){
	
	$msg = $_POST["msg"];
	
	if(empty($_POST["msg"]) || strlen($_POST["msg"]) < 16 )
		{
			$error['msg'] = true;
		}		
}


if (empty($error)){
	$message = " Pseudo ".$pseudo." Ville ".$ville." E-mail ".$email." Message : ".$msg;
	
	mail("yohann.thorez@gmail.com", "Envoi du formulaire", $message);
}
	
	echo json_encode($error);



?>