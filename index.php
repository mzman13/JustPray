<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Michael Zheng 1550 Project 1</title>
	<link rel="stylesheet" href="./css/home.css">
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
					<img src="./img/acf_profile.jpg" alt="Profile" class="profile">
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

	<div class="mainQuote">
		<p>Verse of the Day</p>
		<?php
			$fileContents = file("verses.txt");
			$line = $fileContents[rand(0, count($fileContents)-1)];
			print $line;
		?>
	</div>

	<nav>
		<ul>
			<li><a class="home" href="index.php">HOME</a></li>
			<li><a class="recent" href="">RECENT</a></li>
			<li><a class="popular" href="">POPULAR</a></li>
			<li><a class="archive" href="">ARCHIVE</a></li>
			<li><a class="contact" href="contact/contact.php">CONTACT US</a></li>
		</ul>
	</nav>

	<div class="postsContainer">
		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic4.jpg" alt="pic1"></figure>
				<p>Pray for CS 1520 Tests <br>-Username</p>
			</a>
		</div>

		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic2.jpg" alt="pic2"></figure>
				<p>Pray for non-exploding smartphones <br>-Username</p>
			</a>
		</div>

		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic3.jpg" alt="pic3"></figure>
				<p>Pray for my safe travels to Canada after Election <br>-Username</p>
			</a>
		</div>

		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic5.jpg" alt="pic3"></figure>
				<p>Pray I can win at Catan <br>-Username</p>
			</a>
		</div>

		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic6.jpg" alt="pic6"></figure>
				<p>Pray for even more Marvel movies <br>-Username</p>
			</a>
		</div>

		<div class="post">
			<a href="" class="postBox">
				<figure><img src="img/pic1.jpg" alt="pic1"></figure>
				<p>Pray for Hurricane Matthew <br>-Username</p>
			</a>
		</div>		
	</div>

	<div class="footer">
		<?php
			include 'footer.php';
		?>
	</div>

	<script src="./js/form.js"></script>
</body>
</html>
