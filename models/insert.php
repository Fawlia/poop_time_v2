<?php

$pseudo = $cp = $ville = $msg = $email = "";
$nomError = $prenomError = $cpError = $villeError = $msgError = $emailError = "";




if (isset($_POST["msg"])){

	$msg = $_POST["msg"];

	if(empty($_POST["msg"]) || strlen($_POST["msg"]) < 16 )
			{
			echo "Veuillez rentrer un message plus long valide";
			$msgError = true;
			}
	else {

	}

}

if ($msgError == true)

{

	echo "IL Y A QUELQUE CHOSE DE POURRI DANS CE FORMULAIRE";

}

else {
	$servername = "localhost";
	$username = "root";
	$password = "online";

	try {
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);

		$pdo = new PDO("mysql:host=$servername;dbname=poop_time", $username, $password, $options);

		// set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}

	// INSERTION DE LA VILLE DANS LA TABLE VILLE
	$stmt = $pdo->prepare("INSERT INTO ville (nom_ville) VALUES (:ville)");
	$stmt->bindParam(':ville', $_POST["ville"]);
	$result = $stmt->execute();


	// INSERTION DU PSEUDO DANS LA TABLE USERS
	$stmt1 = $pdo->prepare("INSERT INTO users (pseudo) VALUES (:pseudo)");
	$stmt1->bindParam(':pseudo', $_POST["pseudo"]);
	$result1 = $stmt1->execute();


	// SELECTION DE L'ID DU PSEUDO DANS LA TABLE USERS
	$stmt3 = $pdo->prepare("SELECT id FROM users WHERE users.pseudo = '".$_POST['pseudo']."'");
	$stmt3->execute();
	$result2 = $stmt3->fetchAll();
	echo($result2[0][0]."<br>");


	// SELECTION DE L'ID DE LA VILLE DANS LA TABLE VILLE
	$stmt4 = $pdo->prepare("SELECT id FROM ville WHERE ville.nom_ville='".$_POST['ville']."' ");
	$stmt4->execute();
	$result3 = $stmt4->fetchAll();
	echo($result3[0][0]."<br>");

// print_r($_POST);

	// INSERTION D'UN NOUVEAU TOILETTE DANS LA TABLE TOILETTE
	$stmt5 = $pdo->prepare("INSERT INTO toilettes (latitude, longitude, description, ville_id, users_id)
		VALUES (".$_POST["lat"].", ".$_POST["lng"].", '".$_POST["msg"]."', ".$result3[0][0].", ".$result2[0][0]." )");

		//$stmt5->bindParam(':lat', $_POST["lat"]);
		//$stmt5->bindParam(':lng', $_POST["lng"]);
		//$stmt5->bindParam(':msg', $_POST["msg"]);
		//$stmt5->bindParam($result2[0][0], );
		//$stmt5->bindParam($result3[0][0], );

		$result4 = $stmt5->execute();


}


?>
