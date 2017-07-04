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
				<button>LOGIN</button>
				<br/><br/>
				<a href="#" id="myBtn">Don't have an account yet? register here</a>
			</form>
		</div>
	</div>
</body>
</html>

</style>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal">
	<form action="" method="post">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>New User Registration</h2>
    </div>
    <div class="modal-body">
  		  <input type="text" name="username" placeholder="Username" required>
  		  <br/><br/>
  		  <input type="password" name="pass" placeholder="Password" required>
  		  <br/><br/>
  		  <button>Register Me</button>
  		  <br/><br/>
    </div>
    <div class="modal-footer">
      <p>&copy 2017, Christ for Youth International, All Rights Reserved</p>
    </div>
  </div>

</form>
</div>
	<!-- JS Files -->
	<script src="js/modal.js"></script>
