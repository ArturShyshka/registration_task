<?php 
	require_once "vendor/db.php";

	function getArticle () {
		$sql  = "SELECT * FROM `article`";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$art = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return resultToArray ($art);
	}

	function resultToArray ($art) {
		$array = array();
		while ($row = $art->fetch()) {
			$array[] = $row;
		}
		return $array;
	}
?>