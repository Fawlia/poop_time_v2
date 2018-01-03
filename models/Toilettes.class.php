<?php



class Toilettes {

	public function selectionToilettes($pdo){

		$stmt = $pdo->prepare("SELECT * FROM toilettes");

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
