<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Page</title>
	<link rel="stylesheet" href="./css/contact.css">
</head>

<body>
	<div class="header">
		<div id="logo">
			<h2>JustPray</h2>
		</div>

		<div id="search">
			<input type="text" name="search" placeholder="Search...">
		</div>
		
		<div id="loginButton">
			<button onclick="displayMenu()">LOGIN</button>
		</div>

		<!--Login Modal-->
		<div id="loginMenu" class="modal">
			<span onclick="hideMenu()" class="close" title="Close Modal">&times;</span>

			<!--Container Content-->
			<form class="modal-content animate" name="loginForm" action="" method="get" onsubmit="return checkInputs();">
				<div class="imgcontainer">
					<img src="../img/acf_profile.jpg" alt="Profile" class="profile">
					<h3>Login to Just Pray or Create an account</h3>
				</div>

				<div class="container">
					<input id="uname" type="text" placeholder="Username" name="username"><br>

					<input id="pword" type="password" placeholder="Password" name="password">

					<button type="submit">LOGIN</button>
				</div>

				<div class="container">
					<p>Don't have an account? <a href="">Join Now!</a></p>
				</div>
			</form>
		</div>
	</div>

	<div class="mainTitle">
		<h1>Get in Touch!</h1>
	</div>

	<nav>
		<ul>
			<li><a class="home" href="../index.php">HOME</a></li>
			<li><a class="recent" href="">RECENT</a></li>
			<li><a class="popular" href="">POPULAR</a></li>
			<li><a class="archive" href="">ARCHIVE</a></li>
			<li><a class="contact" href="">CONTACT US</a></li>
		</ul>
	</nav>

	<form name="contactForm" action="writeData.php" method="post" onsubmit="returnBack();">
		<div class="contactContainer">
			<input id="name" type="text" name="name" placeholder="Your Name *" required>

			<input id="email" type="text" name="email" placeholder="Your Email *" required><br>

			<input id="message" type="text" name="message" placeholder="Thoughts..."><br>

			<button type="submit">SEND MESSAGE</button>
		</div>
	</form>

	<div class="footer">
		<?php
			include 'footer.php';
		?>
	</div>

	<script src="../js/form.js"></script>
	<script src="./js/return.js"></script>
</body>
</html>
