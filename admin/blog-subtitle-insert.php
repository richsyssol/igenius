<?php
include 'includes/session.php';
if(isset($_POST['submit1'])){
        $product_id = $_POST['product_id'];
        $title = $_POST['title'];
        $descr = $_POST['descr'];
        $filename = $_FILES['img']['name'];
        $url = $_POST['url'];

        $conn = $pdo->open();

        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM blog WHERE title=:title");
        $stmt->execute(['title'=>$title]);
        $row = $stmt->fetch();

        if($row['numrows'] > 0){
            $_SESSION['error'] = 'Product already exist';
        }
        else{
            if(!empty($filename)){
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $new_filename = $title.'.'.$ext;
                move_uploaded_file($_FILES['img']['tmp_name'], 'assets/images/blog/'.$new_filename);   
            }
            else{
                $new_filename = '';
            }

            try{
                $stmt = $conn->prepare("INSERT INTO blog (product_id, title, descr, img, url) VALUES (:product_id, :title, :descr, :img, :url)");
                $stmt->execute(['product_id'=>$product_id, 'title'=>$title, 'descr'=>$descr, 'img'=>$new_filename, 'url'=>$url]);
                $_SESSION['success'] = 'User added successfully';

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

  //  header('location: add-blog.php');
   echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>";
    ?>