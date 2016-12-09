<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us Page</title>
	<link rel="stylesheet" href="../css/home.css">
</head>

<body>
	<div class="header">
		<?php
			include '../header.php';
		?>

		<div class="archiveTitle">
			<h1>Archives</h1>
		</div>
		<div class="sortButtonDiv">
			<button class="sortButton" onclick="getOldest()">Oldest</button>
			<button class="sortButton" onclick="getNewest()">Newest</button>
		</div>
	</div>

	<div class="archiveContent">
		<?php
			include '../db_connect.php';
			$db = open();
			displayOldest();
			$db->close();
		?>
	</div>

	<?php
		include '../footer.php';
	?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/form.js"></script>
	<script src="./js/archive.js"></script>
</body>
</html>
