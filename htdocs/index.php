<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>URL Shortner</title>

		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="centered main">
			<h2 id="title">URL too long? Circumcize it!</h2>
			<div class="centered" id="form-div">
				<form action="output.php" method="post">
					<input type="text" name="url" placeholder="Enter your URL" required/> <br>
					<input type="submit" value="Shorten!">
				</form>
			</div>
		</div>
	</body>
</html>
