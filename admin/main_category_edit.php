<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$main_category = $_POST['main_category'];
		$slug = slugify($main_category);

		try{
			$stmt = $conn->prepare("UPDATE main_category SET main_category=:main_category, slug=:slug WHERE id=:id");
			$stmt->execute(['main_category'=>$main_category, 'slug'=>$slug, 'id'=>$id]);
			$_SESSION['success'] = 'Main Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: main_category.php');

?>