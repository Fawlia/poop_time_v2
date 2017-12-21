<?php



class Toilettes {

	public function selectionToilettes($pdo){

		$stmt = $pdo->prepare("SELECT * FROM toilettes");

		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;

	}

	public function selectVilleById($pdo, $id){

		$stmt = $pdo->prepare("SELECT nom_ville FROM ville INNER JOIN toilettes ON ville.id = toilettes.ville_id WHERE toilettes.id=$id");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function selectUserById($pdo, $id){

		$stmt = $pdo->prepare("SELECT pseudo FROM users INNER JOIN toilettes ON users.id = toilettes.users_id WHERE toilettes.id=$id");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function selectInfoToiletteById($pdo, $id){

		$stmt = $pdo->prepare("SELECT adresse, handicape, payant, description, type FROM toilettes WHERE toilettes.id=$id");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;

	}


}

?>
