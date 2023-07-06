<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
	Your Name is: <?php echo $_POST["name"] ?> &nbsp; <?php echo $_POST["fname"] ?> &nbsp; <?php echo $_POST["sname"] ?>
	<form action=" " method="post">
		<label for="fname">Name:</label>
		<input type="text" name="name">
		
		<label for="fname">Father Name:</label>
		<input type="text" name="fname">

		<label for="fname">Surename</label>
		<input type="text" name="sname"><br>
		
		<input type="submit" name="submit">
	</form>

</body>
</html>