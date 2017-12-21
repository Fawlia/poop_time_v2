<?php

class Users{

  public function selectUserById($pdo, $id){

		$stmt = $pdo->prepare("SELECT pseudo FROM users INNER JOIN toilettes ON users.id = toilettes.users_id WHERE toilettes.id=$id");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

}


 ?>
