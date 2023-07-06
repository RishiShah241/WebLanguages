<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math function</title>
</head>
<body>
   <?php
        echo "Random NumberBetween 1 to 100:  ";
   		echo "<br>";
   		echo(rand(1,100));
   		echo "<br>";
   		echo "Decimal to Binary Conversion: 7  ";
   		echo "<br>";
   		echo decbin("7");
   		echo "<br>";
   		echo "Decimal to Octal Conversion: 10  ";
   		echo "<br>";
   		echo decoct("10");
   		echo "<br>";
   		echo "Decimal to Hexadecimal Conversion: 10  ";
   		echo "<br>";
   		echo dechex("10");
   ?>
</body>
</html>