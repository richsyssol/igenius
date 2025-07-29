<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM tbl_location WHERE city_id=:id");
		
		
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		
		
		

		echo json_encode($row);
	}
?>