<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$descr = $_POST['descr'];

	try{
		$stmt = $conn->prepare("UPDATE faq SET title=:title, descr=:descr  WHERE id=:id");
			$stmt->execute(['title'=>$title, 'descr'=>$descr, 'id'=>$id]);
			$_SESSION['success'] = 'Faqs updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Faq form first';
	}

	header('location:faq.php');

?>