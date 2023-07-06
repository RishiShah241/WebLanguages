<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
<?php 
 if(isset($_POST["sub"]))
 {
 	$num1=$_POST["n1"];
 	$num2=$_POST["n2"];
 	$operand=$_POST["sub"];
 	  if($operand=="+")
 	  	$ans=$num1+$num2;
 	  else if($operand=="-")
 	  	$ans=$num1-$num2;
 	  else if($operand=="*")
 	  	$ans=$num1*$num2;
 	  else if($operand=="/")
 	  	$ans=$num1/$num2;
 }

?>
</head>
<body>
	<form action=" " method="post">
		First Number:
		<input type="text" name="n1"><br>
		Second Number:
		<input type="text" name="n2"><br>
		<input type="Submit" name="sub" value="+">
		<input type="Submit" name="sub" value="-">
		<input type="Submit" name="sub" value="*">
		<input type="Submit" name="sub" value="/"><br><br>
		Resut is:
       <input type="text" value="<?php echo $ans?>">
	</form>

</body>
</html>