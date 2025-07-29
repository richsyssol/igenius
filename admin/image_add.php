<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$product_id = $_POST['product_id'];
		$slug = slugify($name);
		$category_id = $_POST['category_id'];
	/*	$category_id = $_POST['category_id'];*/
		$brand_id = $_POST['brand_id'];
		$description = $_POST['description'];
		$hsn = $_POST['hsn'];
		$gst = $_POST['gst'];
		$shipping_charges = $_POST['shipping_charges'];
		$product_type = $_POST['product_type'];
		$status ="Active";
		
		$originalPath = "uploads/original/";
        $smallPath = "uploads/small/";
        $mediumPath = "uploads/medium/";
        $largePath = "uploads/large/";
        
        if (!file_exists($originalPath)) {
        mkdir($originalPath, 0777, true);
        }
        if (!file_exists($smallPath)) {
            mkdir($smallPath, 0777, true);
        }
        if (!file_exists($mediumPath)) {
            mkdir($mediumPath, 0777, true);
        }
        if (!file_exists($largePath)) {
            mkdir($largePath, 0777, true);
        }
        
        $image = $_FILES['image']['tmp_name'];
        $imageInfo = getimagesize($image);
        $imageName = uniqid() . '.jpg';
    
        // Resize the image to small, medium, and large sizes
        $smallWidth = 80;
        $mediumWidth = 230;
        $largeWidth = 800;

        $smallHeight = $imageInfo[1] * ($smallWidth / $imageInfo[0]);
        $mediumHeight = $imageInfo[1] * ($mediumWidth / $imageInfo[0]);
        $largeHeight = $imageInfo[1] * ($largeWidth / $imageInfo[0]);
        
        $originalImage = imagecreatefromjpeg($image);
        $smallImage = imagecreatetruecolor($smallWidth, $smallHeight);
        $mediumImage = imagecreatetruecolor($mediumWidth, $mediumHeight);
        $largeImage = imagecreatetruecolor($largeWidth, $largeHeight);

        imagecopyresized($smallImage, $originalImage, 0, 0, 0, 0, $smallWidth, $smallHeight, $imageInfo[0], $imageInfo[1]);
        imagecopyresized($mediumImage, $originalImage, 0, 0, 0, 0, $mediumWidth, $mediumHeight, $imageInfo[0], $imageInfo[1]);
        imagecopyresized($largeImage, $originalImage, 0, 0, 0, 0, $largeWidth, $largeHeight, $imageInfo[0], $imageInfo[1]);

        imagejpeg($originalImage, $originalPath . $imageName);
        imagejpeg($smallImage, $smallPath . $imageName);
        imagejpeg($mediumImage, $mediumPath . $imageName);
        imagejpeg($largeImage, $largePath . $imageName);


		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM products WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Product already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
        
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO products (id, product_id,category_id,brand_id, name, slug, hsn, gst, shipping_charges, product_type, description,status) VALUES (:pid , :product_id, :category_id, :brand_id, :name, :slug, :hsn, :gst, :shipping_charges,  :product_type, :description, :status)");
				$stmt->execute(['pid'=>$pid, 'product_id'=>$product_id, 'category_id'=>$category_id,'brand_id'=>$brand_id, 'name'=>$name, 'slug'=>$slug, 'hsn'=>$hsn, 'gst'=>$gst, 'shipping_charges'=>$shipping_charges,'product_type'=>$product_type, 'description'=>$description, 'status'=>$status]);
    				$stmt5 = $conn->prepare("INSERT INTO product_images(product_id, original_path, small_path, medium_path, large_path) VALUES (:pid, :original_path, :small_path, :medium_path, :large_path)");
    				$stmt5->execute(['pid'=>$pid,'original_path'=>$originalPath.$imageName,'small_path'=>$smallPath.$imageName, 'medium_path'=>$mediumPath.$imageName, 'large_path'=>$largePath.$imageName]);
    				for ($i=0; $i < count($_POST['size']) ; $i++){
    				$size=$_POST['size'][$i];
    				$descrip=$_POST['descrip'][$i];
    				$price=$_POST['price'][$i];
    				$stmt = $conn->prepare("INSERT INTO product_sizes(product_id, size, descrip, price) VALUES (:pid, :size, :descrip, :price)");
    				$stmt->execute(['pid'=>$pid,'size'=>$size,'descrip'=>$descrip, 'price'=>$price]);
    				}
    				for ($i=0; $i < count($_POST['category']) ; $i++){
    				$category=$_POST['category'][$i];
    				$stmt = $conn->prepare("INSERT INTO tbl_cat(product_id, category) VALUES (:pid, :category)");
    				$stmt->execute(['pid'=>$pid,'category'=>$category]);
    				}
    				for ($i=0; $i < count($_POST['spec']) ; $i++){
    				$spec=$_POST['spec'][$i];
    				$descr=$_POST['descr'][$i];
    				$stmt = $conn->prepare("INSERT INTO specifications(product_id, spec, descr) VALUES (:pid, :spec, :descr)");
    				$stmt->execute(['pid'=>$pid,'spec'=>$spec, 'descr'=>$descr]);
    				}
    				for ($i=0; $i < count($_POST['key_spec']) ; $i++){
                    $key_spec=$_POST['key_spec'][$i];
                    $stmt = $conn->prepare("INSERT INTO key_feature(product_id, key_spec) VALUES (:pid, :key_spec)");
                    $stmt->execute(['pid'=>$pid, 'key_spec'=>$key_spec]);
                    }
				
				    $_SESSION['success'] = 'Product added successfully';

    			} 
    			catch(PDOException $e){
    				$_SESSION['error'] = $e->getMessage();
    			}
    		}
    
    		$pdo->close();
    	}
    	else{
    		$_SESSION['error'] = 'Fill up product form first';
    	}

	header('location: add-product.php');

?>