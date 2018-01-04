<?php

if (isset($_REQUEST['pseudo'])){

	if(!empty($_REQUEST['pseudo'])){

		$pseudo = $_REQUEST['pseudo'];

	}
}

if (isset($_REQUEST['adresse'])){

	if(!empty($_REQUEST['adresse'])){

		$adresse = $_REQUEST['adresse'];

	}
}

if (isset($_REQUEST['ville'])){

	if(!empty($_REQUEST['ville'])){

		$ville = $_REQUEST['ville'];

	}
}
if (isset($_REQUEST['msg'])){

	if(!empty($_REQUEST['msg'])){

		$msg = $_REQUEST['msg'];

	}
}

$han = $_REQUEST['han'];
$pay = $_REQUEST['pay'];
$lat = $_REQUEST['lat'];
$lng = $_REQUEST['lng'];

if($han != '' && $pay != '' && $msg != '' && $pseudo != '' && $adresse != '' && $ville != ''){

	$servername = "localhost";
	$username = "fsimmet";
	$password = "fsimmet@2017";

	try {
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);

		$pdo = new PDO("mysql:host=$servername;dbname=fsimmet", $username, $password, $options);

		// set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}

	// SELECTION DE L'ID DU PSEUDO DANS LA TABLE USERS
	$stmt3 = $pdo->prepare("SELECT id FROM users WHERE users.pseudo = '".$pseudo."'");
	$stmt3->execute();
	$result2 = $stmt3->fetchAll();

	if(empty($result2)){

		// INSERTION DU PSEUDO DANS LA TABLE USERS
		$stmt1 = $pdo->prepare("INSERT INTO users (pseudo) VALUES (:pseudo)");
		$stmt1->bindParam(':pseudo', $pseudo);
		$result1 = $stmt1->execute();
		// SELECTION DE L'ID DU PSEUDO DANS LA TABLE USERS
		$stmt3 = $pdo->prepare("SELECT id FROM users WHERE users.pseudo = '".$pseudo."'");
		$stmt3->execute();
		$result2 = $stmt3->fetchAll();

	}


	// SELECTION DE L'ID DE LA VILLE DANS LA TABLE VILLE
	$stmt4 = $pdo->prepare("SELECT id FROM ville WHERE ville.nom_ville='".$ville."' ");
	$stmt4->execute();
	$result3 = $stmt4->fetchAll();

	if(empty($result3)){

		// INSERTION DE LA VILLE DANS LA TABLE VILLE
		$stmt = $pdo->prepare("INSERT INTO ville (nom_ville) VALUES (:ville)");
		$stmt->bindParam(':ville', $ville);
		$result = $stmt->execute();
		// SELECTION DE L'ID DE LA VILLE DANS LA TABLE VILLE
		$stmt4 = $pdo->prepare("SELECT id FROM ville WHERE ville.nom_ville='".$ville."' ");
		$stmt4->execute();
		$result3 = $stmt4->fetchAll();

	}
//print_r($_REQUEST);

	// INSERTION D'UN NOUVEAU TOILETTE DANS LA TABLE TOILETTE
	// $stmt5 = $pdo->prepare("INSERT INTO toilettes (latitude, longitude, adresse, handicape, payant, description, ville_id, users_id)
	// 		VALUES (".$lat.", ".$lng.", '".$adresse."' , ".$han." , ".$pay.", '".$msg."', ".$result3[0][0].", ".$result2[0][0]." )");
  //
  //
  //
	// 	$result4 = $stmt5->execute();


}
//, adresse, handicape, payant, description

?>
