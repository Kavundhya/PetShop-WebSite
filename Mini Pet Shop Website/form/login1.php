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
			<form method="post" action="login.php" name="form">
				<div class="input-box">
					<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="email" name="mail" required>
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