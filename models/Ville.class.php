<?php

class Ville{

  public function selectVilleById($pdo, $id){

		$stmt = $pdo->prepare("SELECT nom_ville FROM ville INNER JOIN toilettes ON ville.id = toilettes.ville_id WHERE toilettes.id=$id");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}
 ?>
