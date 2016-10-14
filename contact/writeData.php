<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Page</title>
</head>

<body>
	<?php
		$name = filter_input(INPUT_POST, "name");
		$email = filter_input(INPUT_POST, "email");
		$message = filter_input(INPUT_POST, "message");

		$data = $name . "\n" . $email . "\n" . $message . "\n";
		file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);

		header("Location: contact.php");
	?>
</body>
</html>
