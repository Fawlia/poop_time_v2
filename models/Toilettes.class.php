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

	public function insertInfoIntoToilette($pdo, $infos){

		$stmt = $pdo->prepare("INSERT INTO toilettes (latitude, longitude, adresse, handicape, payant, description, ville_id, users_id)
				VALUES (".$infos['lat'].", ".$infos['lng'].", '".$infos['adresse']."' , ".$infos['han']." , ".$infos['pay'].", '".$infos['msg']."', ".$infos['ville_id'].", ".$infos['users_id']." )");
		$stmt->execute();




	}


}

?>
