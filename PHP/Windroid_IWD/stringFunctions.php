<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Srings Functions</title>
</head>
<body>
 
<?php
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo strrev($str);
echo " <br>";


$str = "Nikunj";
echo $str . "<br>";
echo trim($str,"Ni");
echo "<br>";


$str1 = str_replace("world","Peter","Hello world");
 echo $str1;
 ?>

</body>
</html>