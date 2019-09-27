<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
	<?php 
		$user_name = $_POST["user_name"];
		echo "<span>Привіт, ".$user_name." </span>";
	?>
</body>
</html>