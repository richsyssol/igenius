<?php 
	include 'includes/session.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, brand.id AS b_id,brand.brand AS bname,category.name AS catname,category.id AS cid FROM brand LEFT JOIN category ON category.id=brand.cat_id WHERE brand.id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>