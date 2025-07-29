<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$descr = $_POST['descr'];
		$conn = $pdo->open();

	
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
			$filename = $_FILES['image']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/blog/'.$new_filename);	
			}
			
			try{
				$stmt = $conn->prepare("INSERT INTO blogs (blog_name,blog_img, blog_desc) VALUES (:blog_name, :blog_img, :blog_desc)");
				$stmt->execute(['blog_name'=>$title,'blog_img'=>$new_filename, 'blog_desc'=>$descr]);
				
		
				$_SESSION['success'] = 'Blog added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up file form first';
	}

	header('location: blog.php');

?>