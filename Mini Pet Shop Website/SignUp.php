 <?php
 
 	session_start();

	include("db.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];


		if(!empty($email) && !empty($password) && !is_numeric($email)){

			$query = "insert into form (firstname, lastname, gender, address, email, password) values ('$firstname', '$lastname', '$gender', '$address', '$email', '$password')";
			mysqli_query($con, $query);
			echo "<script type='text/javascript'> alert('Successfully Register')</script>";

		}else{
			echo "<script type='text/javascript'> alert('Please Enter valid informations')</script>";
		}



	}
 
 ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet Products</title>
	<link rel ="stylesheet" href="signupcss.css">
</head>

<body>
	<div class="container">
		
		<div class="navbar">
			<img src="logo.png" class="logo" >
		</div>
		
		<div class="wrapper">
			<div class="form-box login">
				<h2>SIGN UP</h2>
				<form method="POST" name="form">
					<div class="input-box">
						<input type="text" name="firstname" required>
						<label>First Name</label>
					</div>
					<div class="input-box">
						<input type="text" name="lastname" required>
						<label>Last Name</label>
					</div>
					<div class="input-box">
						<input type="text" name="gender" required>
						<label>Gender</label>
					</div>
					<div class="input-box">
						<input type="text" name="address" required>
						<label>Address</label>
					</div>
					<div class="input-box">
						<input type="email" name="email" required>
						<label>E-mail</label>
					</div>
					<div class="input-box">
						<input type="password" name="password" required>
						<label>Password</label>
					</div>
					<button type="submit" class="btn" name="loginBtn">Submit</button>
					<div class="login-register">
						<p>Already have an account? <a href="login1.php" class="register-link"> Login here</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>