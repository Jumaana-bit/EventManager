<!DOCTYPE html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Style3.css">
	<link rel="stylesheet" type="text/css" href="RegisterStyle.css">
</head>
<body>
	<header>
		<nav class="navbar">
		<div class="brand-title">EMS</div>
		<div class="navbar-links">
			<ul>
				<li><a href="form.html">Booking</a></li>
				<li><a href="project.php">Log In</a></li>
				<li><a href="register.php">Register</a></li>

			</ul>
		</div>
	</nav>
	</header>
			<h2 class="title">Register</h2>
			<div class="form_box">
				<div class="inner-box">
			<form class="register" action="reg_process.php" method="post">
				<label class="floatLabel">First Name</label>
				<input class="textbox" type="text" name="fname"><br>
				<label class="floatLabel">Last Name</label>
				<input class="textbox" type="text" name="lname"><br>
				<label class="floatLabel">Username</label>
				<input class="textbox" type="text" name="uname"><br>
				<label class="floatLabel">Email</label>
				<input class="textbox" type="email" name="email"><br>
				<label class="floatLabel">Password</label>
				<input class="textbox" type="password" name="password"></br>

				<input type="submit" name="signup" value="Sign Up" class=sign-btn>
			</form>
		</div>
	</div>
</body>



