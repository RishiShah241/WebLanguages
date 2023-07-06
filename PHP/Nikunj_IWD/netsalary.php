<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Net Salary</title>
<?php 
 if(isset($_POST["sub"]))
 {
 	$bs=$_POST["bs"];
 	$da=$bs*(5/100);
 	$hra=$bs*(10/100);
 	$Medical=$bs*(4/100);
 	$gross_salary=$da+$hra+$Medical;
 	$insurance=$gross_salary*(7/100);
   $PF=$gross_salary*(5/100);
   $Deduction=$insurance+$PF;
   $NetSalary=$gross_salary-$Deduction;


 }

?>

</head>
<body>
	<form action="" method="post">
		Basic Salary:
		<input type="text" name="bs"><br>
	    <input type="Submit" name="sub" value="result"><br><br>
    Basic Salary:
	   <input type="text" value="<?php echo $bs?>"><br>	
    Da:
		<input type="text" value="<?php echo $da?>"><br>
		HRA:
		<input type="text" value="<?php echo $hra?>"><br>
		Medical:
		<input type="text" value="<?php echo $Medical?>"><br>
		Gross_Salary:
		<input type="text" value="<?php echo $gross_salary?>"><br>
		Insurance:
		<input type="text" value="<?php echo $insurance?>"><br>
		PF:
		<input type="text" value="<?php echo $PF?>"><br>
		Deduction:
		<input type="text" value="<?php echo $Deduction?>"><br>
		Netsalary:
		<input type="text" value="<?php echo $NetSalary?>">
	</form>

</body>
</html>
