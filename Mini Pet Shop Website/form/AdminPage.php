<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<title>Admin Page</title>
	<link rel="stylesheet" href="Styles.css">
	
</head>

<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
	
	<div class="container">
		
		<div class="navbar">
			<img src="logo.png" class="logo" >
		</div>
		
		<div class="Admin-product-form-container">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

				<h3>ADD NEW PRODUCTS</h3>
				<input type="text" placeholder="Enter Product Name" name="product_name" class="box">
				<input type="number" placeholder="Enter Product Price" name="product_price" class="box">
				<input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
				<input type="submit" class="btn" name="add_product" value="Add a product">
			</form>
		</div>
	</div>
	
</body>
</html>