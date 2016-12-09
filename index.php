<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Michael Zheng 1550 Project 1</title>
	<link rel="stylesheet" href="./css/home.css">
</head>

<body>
	<div class="header">
		<?php
			include 'header.php';
		?>

		<div class="mainQuote">
			<?php
				$fileContents = file("verses.txt");
				$line = $fileContents[rand(0, count($fileContents)-1)];
				print $line;
			?>
		</div>
	</div>

	<div class="mainAbout">
		<p>JustPray is dedicated to creating a community of people 
		who can PRAY for one another whether in times of joy or in times of sadness.</p>
	</div>

	<div class="postsContainer">
		<a href='changes.txt'>CHANGES MADE</a>
	</div>
	
	<?php
		include 'footer.php';
	?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="./js/form.js"></script>

</body>
</html>
