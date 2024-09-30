<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet Products WebSite</title>
	<link rel="stylesheet" href="WebPage1C.css">
</head>

<body>
<!--Header section-->
<header>
	
	<nav class="navbar">
		<a href="#home">HOME</a>
		<a href="#about">ABOUT</a>
		<a href="#products">PRODUCTS</a>
		<a href="#contact">CONTACT</a>
	</nav>
	<div class="icons">
		<a href="#" class="home_"><ion-icon name="home"></ion-icon></a>
		<a href="#" class="shopping-cart"><ion-icon name="cart"></ion-icon></a>
		<a href="SignUp.php" class="user"><ion-icon name="person"></ion-icon></a>
	</div>
	
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>	
	
</header>
<!--Header section ends-->
<!--Home section starts-->
<section class="home" id="home">
	
	<div class="content">
		<img src="logo.png" class="logo" >
		<h1>PRODUCT CORNER</h1>
		<span>Welcome to our pet product shop, where we strive to provide the highest quality products for your beloved pets. At our store, we understand the deep bond between pets and their owners, and we are committed to enhancing the lives of both through our carefully curated selection of pet products.</span>
	</div>
	
</section>
<!--Home section ends-->
<!--about section starts-->
<section class="about" id="about">
	
	<h1 class="heading"> <span>ABOUT </span>US</h1>
	<div class="row">
		<div class="video-container">
			<video src="video.mp4" loop autoplay muted></video>
		</div>
		<div class="content">
			<h3>Why choose us ?</h3>
			<p>At PET CORNER, we understand the deep bond between pets and their owners, and we are dedicated to providing high-quality products to enhance the well-being of your beloved companions.</p>
			<p>Our carefully curated selection includes premium pet food, treats, toys, grooming supplies, and more, sourced from trusted brands that prioritize your pet's health and happiness. Whether you have a playful pup, a curious cat, a feathered friend, or a scaly companion, we have the products to cater to their unique needs.
			</p>
			<a href="#" class="btn">learn more</a>
		</div>
	</div>
	
</section>
<!--about section ends-->
	
<!--icons section starts-->
<section class="icons-container">
	
		<div class="icons">
			<img src="pic1.png" alt="">
			<div class="info">
				<h3>Free delivery</h3>
				<span>on all orders</span>
			</div>
		</div>
	
		<div class="icons">
			<img src="pic2.png" alt="">
			<div class="info">
				<h3>10 days returns</h3>
				<span>money back guarantee</span>
			</div>
		</div>
	
		<div class="icons">
			<img src="pic3.png" alt="">
			<div class="info">
				<h3>Offers & Gifts</h3>
				<span>on all orders</span>
			</div>
		</div>
	
		<div class="icons">
			<img src="pic4.png" alt="">
			<div class="info">
				<h3>Secure Payments</h3>
				<span>protected by paypal</span>
			</div>
		</div>
</section>
<!--icons section ends-->
<!--products section starts-->
<section class="products" id="products">
	
	<h1 class="heading"> LATEST <span>PRODUCTS</span></h1>
	<div class="box-container">
		
		<div class="box">
			<span class="discount">-10%</span>
			<div class="image">
				<img src="birdhouse.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"></ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Bird House</h3>
				<div class="price"> $12.09 <span>$15.99</span></div>
			</div>
		</div>
		
		<div class="box">
			<span class="discount">-5%</span>
			<div class="image">
				<img src="food-cabinet.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"></ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Food Cabinet</h3>
				<div class="price"> $125.09 <span>$169.99</span></div>
			</div>
		</div>
		
		<div class="box">
			<span class="discount">-15%</span>
			<div class="image">
				<img src="petToys.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"> </ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Pet Toys</h3>
				<div class="price"> $2.09 <span>$5.99</span></div>
			</div>
		</div>
		
		<div class="box">
			<span class="discount">-15%</span>
			<div class="image">
				<img src="pic4.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"> </ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Fish Tank</h3>
				<div class="price"> $2.09 <span>$5.99</span></div>
			</div>
		</div>
		
		<div class="box">
			<span class="discount">-15%</span>
			<div class="image">
				<img src="pic5.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"> </ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Tortoise Treat Ball</h3>
				<div class="price"> $2.09 <span>$5.99</span></div>
			</div>
		</div>
		
		<div class="box">
			<span class="discount">-15%</span>
			<div class="image">
				<img src="pic6.jpg" alt="">
				<div class="icons">
					<a href="#" class="heart"><ion-icon name="heart"></ion-icon></a>
					<a href="#" class="shopping-cart"><ion-icon name="cart"> </ion-icon></a>
					<a href="#" class="share"><ion-icon name="share-social"></ion-icon></a>
				</div>
			</div>
			<div class="content">
				<h3>Woven Willow Rabbit Toys</h3>
				<div class="price"> $2.09 <span>$5.99</span></div>
			</div>
		</div>
		
	</div>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>	
</section>
<!--products section ends-->
<!--contact section starts-->
<section class="contact" id="contact">
	
	<h1 class="heading"><span> CONTACT </span> US </h1>
	
	<div class="row">
		
		<form action="">
			<input type="text" placeholder="Name" class="box">
			<input type="email" placeholder="E-mail" class="box">
			<input type="number" placeholder="Number" class="box">
			<textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
			<input type="submit" value="Send message" class="btn">
		</form>
		
		<div class="image">
			<img src="contact.jpg" alt="">
		</div>
		
	</div>
	
</section>
<!--contact section ends-->
<!--footer section starts-->
<section class="footer">
	
	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="#">HOME</a>
			<a href="#">ABOUT</a>
			<a href="#">PRODUCTS</a>
			<a href="#">CONTACT</a>
		</div>
		<div class="box">
			<h3>extra links</h3>
			<a href="#">my account</a>
			<a href="#">my order</a>
			<a href="#">my favorite</a>
		</div>
		<div class="box">
			<h3>locations</h3>
			<a href="#">Sri Lanka</a>
			<a href="#">USA</a>
			<a href="#">Japan</a>
			<a href="#">France</a>
		</div>
		<div class="box">
			<h3>contact info</h3>
			<a href="#">+012-345-6789</a>
			<a href="#">productcorner@gmail.com</a>
			<a href="#">7/Rose Garden,Colombo</a>
			<img src="payments.png" alt="">
		</div>
	</div>
	
	<div class="credit"> created by <span>	S. K. K. Jayathilaka - SA21098796</span> |All Rights Reserved</div>
	
</section>
<!--footer section ends-->
	
</body>
</html>
