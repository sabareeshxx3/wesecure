<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="loginsignup.css">
</head>
<body>
<section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i:0;"></div>
			<div class="square" style="--i:1;"></div>
			<div class="square" style="--i:2;"></div>
			<div class="square" style="--i:3;"></div>
			<div class="square" style="--i:4;"></div>
			<div class="container">
				<div class="form">
					<h2>LOGIN</h2>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="inputbox">
  		<input type="text" name="username" placeholder="username" >
  	</div>
  	<div class="inputbox">
  		<input type="password" name="password" placeholder="password">
  	</div>
	  <div class="inputbox">
    <input type="submit" class="btn" name="login_user" value="Login">
</div>

	<p class="forget">Dont have an account ? <a href="register.php">Sign Up here</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>


</body>
</html>