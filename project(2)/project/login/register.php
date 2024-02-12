<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Signup</title>
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
                    <h2>SIGN UP</h2>
                    <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="inputbox">
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
  	</div>
  	<div class="inputbox">
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email">
  	</div>
  	<div class="inputbox">
  	  <input type="password" name="password_1" placeholder="password">
  	</div>
  	<div class="inputbox">
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
      <div class="inputbox">
    <input type="submit" class="btn" name="reg_user" value="Register">
</div>

      <p class="forget">Already have an account? <a href="login.php">Login Here</a></p>
      </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>