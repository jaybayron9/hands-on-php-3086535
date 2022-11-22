<!DOCTYPE html>
<html>

<head>
	<title>Delete Speaker</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<?php

	$host = '127.0.01';
	$user = 'mariadb';
	$pass = 'mariadb';
	$db = 'mariadb';

	$mysqli = new mysqli(
		$host,
		$user,
		$pass,
		$db
	);

	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		$query = $mysqli->query("DELETE FROM speakers WHERE name = '$name'");

		if ($query) {
			echo '<h1>' . $name . ' success fully deleted!.</h1>';
		} else {
			echo
			'<h1>There was an issue.</h1>';
		}
	}

	?>
	<p><a href="index.php">Go Back</a></p>
</body>

</html>