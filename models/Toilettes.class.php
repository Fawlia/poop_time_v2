<?php



class Toilettes {
	
	public function selectionToilettes($pdo){
		
		$stmt = $pdo->prepare("SELECT * FROM toilettes");

		$stmt->execute();
		$result = $stmt->fetchAll();
	
		return $result;
		
	}
	
	
		
}

?>