<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();
		


		try{
			$stmt = $conn->prepare("DELETE FROM blogs WHERE blog_id=:id");
			$stmt->execute(['id'=>$id]);
			
			$stmt_1 = $conn->prepare("DELETE FROM blog_titles WHERE blog_id=:id");
			$stmt_1->execute(['id'=>$id]);
						
			$stmt_2 = $conn->prepare("DELETE FROM blog_subtitles WHERE blog_id=:id");
			$stmt_2->execute(['id'=>$id]);
							
			$stmt_3 = $conn->prepare("DELETE FROM blog_faq WHERE blog_id=:id");
			$stmt_3->execute(['id'=>$id]);

			$_SESSION['success'] = 'Blog deleted successfully';
			
			
			
			
			
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Banner to delete first';
	}

	header('location: blog.php');
	
?>