<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us Page</title>
	<link rel="stylesheet" href="/CS-1550-Project-1/css/home.css">
</head>

<body>
	<div class="header">
		<?php
			include '../header.php';
		?>

		<div class="prayerTitle">
			<h1>Make a Prayer Request</h1>
		</div>
	</div>

	<div class="prayerContent">
		<form name="contactForm" action="add_prayer.php" method="post" onsubmit="">
			<div class="contactContainer">
				<div><input id="name" type="text" name="name" placeholder="Your Name(optional)"></div>

				<div class="message"><input id="message" type="text" name="message" placeholder="Thoughts..."></div>

				<button type="submit">SUBMIT</button>
			</div>
		</form>
	</div>

	<?php
		include '../footer.php';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/form.js"></script>
	
</body>
</html>
