<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<link rel="stylesheet" href="assets\css\loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets\img\wave.png">
	<div class="container">
		<div class="img">
			<img src="assets\img\bg.svg">
		</div>
		<div class="login-content">
			<form action="user-page.blade.php">
				<img src="assets\img\avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" href="/" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets\js\login.js"></script>
</body>
</html>