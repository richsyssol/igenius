<?php
	include 'includes/session.php';

	if(isset($_POST['edit_type'])){
		$id = $_POST['id'];
		$product_type = $_POST['product_type'];
	
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		try{
			$stmt = $conn->prepare("UPDATE products SET product_type=:product_type WHERE id=:id");
			$stmt->execute(['product_type'=>$product_type, 'id'=>$id]);
			$_SESSION['success'] = 'Type updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Type form first';
	}

	header('location: active-product.php');

?>