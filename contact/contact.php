<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Page</title>
	<link rel="stylesheet" href="../css/home.css">
</head>

<body>
	<div class="header">
		<?php
			include '../header.php';
		?>

		<div class="contactTitle">
			<h1>Get in Touch!</h1>
		</div>
	</div>

	<p class="formTitle">Say hi to <b>miz37@pitt.edu</b></p>
	<form name="contactForm" action="writeData.php" method="post" onsubmit="returnBack();">
		<div class="contactContainer">
			<div><input id="name" type="text" name="name" placeholder="Your Name *" required></div>

			<div><input id="email" type="text" name="email" placeholder="Your Email *" required></div>

			<div class="message"><input id="message" type="text" name="message" placeholder="Thoughts..."></div>

			<button type="submit">SEND MESSAGE</button>
		</div>
	</form>

	
	<?php
		include '../footer.php';
	?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/form.js"></script>
	
</body>
</html>
