<!DOCTYPE html>
<html>
<head>
	<title>decimal conversion</title>
</head>
<body>
	<form action="" method="post">
	<table>
	   <tr>
			<td>Decimal to Binary:</td>
			<td><input type="number" name="bin"></td><br>
	    </tr>
	    <tr>
			<td>Decimal to Octal:</td>
			<td><input type="number" name="oct"><br></td>
		</tr>
		<tr>
			<td>Decimal to Hexadecimal:</td>
			<td><input type="number" name=hex></td><br>
		</tr>
    <table>
			<td><input type="submit" name="sub"><br>
	</form>
	<?php
		if(isset($_POST["sub"]))
		{
			$bin=$_POST["bin"];	
			$oct=$_POST["oct"];
			$hex=$_POST["hex"];		
  		echo "Decimal to Binary Conversion: $bin";
   		echo "<br>";
   		echo decbin("$bin");
   		echo "<br>";
   		echo "Decimal to Octal Conversion: $oct";
   		echo "<br>";
   		echo decoct("$oct");
   		echo "<br>";
   		echo "Decimal to Hexadecimal Conversion: $hex";
   		echo "<br>";
   		echo dechex("$hex");
   	    }
   	?>
</body>
</html>