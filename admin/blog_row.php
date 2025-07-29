<?php 
	include 'includes/session.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
   
   $data = file_get_contents('php://input');
   $blogs = json_decode($data,true);
   
   extract($blogs);
	
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM blogs WHERE blog_id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	
}

?>