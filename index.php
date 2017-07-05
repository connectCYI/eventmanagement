<!DOCTYPE html>
<html>
<head>
	<title>CYI Events Portal - Login</title>

	<!--CSS Files-->
	<!--<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!-- JS Files -->
	<script src="js/modal.js"></script>

</head>
<body>
	<div class="login_section">
		<div class = "login_form">
			<form action="" method="post">
				<div class="login_header">
					<img src="css/img/logo.jpg">
					<h4>CYI Events Portal. Please login to proceed</h4>
				</div>
				<input type="text" name="username" placeholder="Username" required>
				<br/><br/>
				<input type="password" name="pass" placeholder="Password" required>
				<br/><br/>
				<button name="Login">LOGIN</button>
				<button name="ResetPassword">RESET PASSWORD</button>
				<hr/>
				<a href="#" id="myBtn">Don't have an account yet? register here</a>
			</form>
		</div>
		<p>&copy 2017, Christ for Youth International, All Rights Reserved</p>
	</div>
</body>
</html>

</style>
</head>
<body>

<?php
#This calls the Modal template. I moved it into a different in order to have less lines here.
require_once("templates/modal.php");
?>
<!-- JS File for Modal -->
<script src="js/modal.js"></script>
