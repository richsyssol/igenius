<?php
$data = file_get_contents('php://input');
$data = json_decode($data,true);



	include 'includes/session.php';
	include 'includes/slugify.php';
	
		$conn = $pdo->open();
		$response = array();
		
			try{
			    $blg_sub_name = $data['subtitle'];
			      $blg_title_id = $data['title_under'];
			        $blg_sub_desc = $data['descr'];
				$stmt = $conn->prepare("INSERT INTO blog_subtitle (blg_sub_name,blg_sub_desc,blg_title_id) VALUES (:blg_sub_name,:blg_sub_desc, :blg_title_id)");
				$stmt->execute(['blg_sub_name'=>$blg_sub_name,'blg_sub_desc'=>$blg_sub_desc,'blg_title_id'=>$blg_title_id]);
				
			
				echo json_encode($response['status']=1);
				
		
				// $_SESSION['success'] = 'Blog added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			echo json_encode($response['status']=0);
			}

?>