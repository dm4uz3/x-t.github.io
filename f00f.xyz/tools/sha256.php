<!DOCTYPE html>
<html>
<head>
	<title>SHA256 encoder</title>
</head>
<body>
	<?php
	if (isset($_POST["shaInput"])) {
		echo 'Input: ' . htmlspecialchars($_POST["shaInput"]);
		echo '<br>';
		echo 'Encoded: ' . hash('sha256', $_POST["shaInput"]);
		echo '<br>';
	}
	?>
	<form action="" method="post">
		Enter text to encode as SHA256: <input type="text" name="shaInput"><input type="submit" value="Encode">
	</form>
</body>
</html>

