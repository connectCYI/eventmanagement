<!DOCTYPE html>
<html>
<head>
	<title>CYI Events Portal - Login</title>

	<!--CSS Files-->
	<!--<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">

	<!-- JS Files -->
	<script src="js/modal.js"></script>

</head>
<body>
<div id="section">
	<div class="TopMenu">
		<div class = "logo">
			<img src="css/img/logo.jpg" />
		</div>
		<div class = "Menu">
			<ul>
			<li class="dropdown">
			    <a href="javascript:void(0)" class="dropbtn">First Name</a>
			    <div class="dropdown-content">
			      <a href="#">Settings</a>
			      <a href="#">Logout</a>
			    </div>
			  </li>
			  <li><a href="#news">All Events</a></li>
			  <li class="dropdown">
			    <a href="javascript:void(0)" class="dropbtn">Events</a>
			    <div class="dropdown-content">
			      <a href="#">Main Events</a>
			      <a href="#">Events By Branch</a>
			      <a href="#">External Events</a>
			    </div>
			  </li>
			</ul>

		</div>
		<div class = "search">
			<form action=""><input type="text" name="Search" placeholder="Search" /></form>
		</div>
	</div>
</div>
<div id="section">
	<div class="Content">
		<div class = "">

		</div>

	</div>
</div>
<p>&copy 2017, Christ for Youth International, All Rights Reserved</p>
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
