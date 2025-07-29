<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$descr = $_POST['descr'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM blog WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
	    $bid= rand("000000","999999");

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'blog  already taken';
		}
		else{
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
				$stmt = $conn->prepare("INSERT INTO blog (id,image, title , descr) VALUES (:bid,:image, :title, :descr)");
				$stmt->execute(['bid'=>$bid,'image'=>$new_filename,'title'=>$title, 'descr'=>$descr]);
				
				echo "<pre>";
				print_r($_POST);
				exit;
				
				
				for ($i=0; $i < count($_POST['name']) ; $i++){
				$name=$_POST['name'][$i];
				$content=$_POST['content'][$i];
			
							$faq_que = $_POST['faq_que'][$i];
									$faq_ans = $_POST['faq_ans'][$i];
				$stmt1 = $conn->prepare("INSERT INTO tbl_blog_index(blog_id, name, subtitle, content,faq_que,faq_ans) VALUES (:bid, :name, :subtitle, :content,:faq_que,:faq_ans)");
				$stmt1->execute(['bid'=>$bid,'name'=>$name, 'subtitle'=>$subtitle, 'content'=>$content,'faq_que'=>$faq_que,'faq_ans'=>$faq_ans]);
				}
				$_SESSION['success'] = 'Blog added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up file form first';
	}

	header('location: blog.php');

?>