<?php

session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM form WHERE email = '$email' limit 1";
        $result = mysqli_query($con, $query);

		if($result)
		{
			if ($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
			
				if ($user_data['password'] == $password) {
					
					header("location: index.php");
					die;
				}
			}
		}
		header("location: index.php");
    }else{
		echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
	}
}

?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet Products</title>
	<link rel ="stylesheet" href="login2.css">
</head>

<body>
	<div class="container">
		
		<div class="navbar">
			<img src="logo.png" class="logo" >
		</div>
		
		<div class="wrapper">
		<div class="form-box login">
			<h2>LOGIN</h2>
			<form method="POST" name="form">
				<div class="input-box">
					<span class="icon"><ion-icon name="email"></ion-icon></span>
					<input type="email" name="email" required>
					<label>E-mail</label>
				</div>
				<div class="input-box">
					<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				<div class="remember-forgot">
					<label><input type="checkbox">Remember me</label>
					<a href="#">Forgot password?</a>
				</div>
				<button type="submit" class="btn" name="loginBtn">Login</button>
				<div class="login-register">
					<p>Don't have an account? <a href="SignUp.php" class="register-link"> Sign Up here</a></p>
				</div>
			</form>
		</div>
	</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>	
</body>
</html>