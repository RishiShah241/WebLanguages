<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Detail</title>
	
</head>
<body align="center">
	<fieldset>
	<h1>Employee Details</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" ></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="add"></textarea></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td>
					<input type="number" name="age">
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" id="male" name="gender">Male
		
					 <input type="radio" id="female" name="gender">Female
				</td>
			</tr>
		</table>
			<br ><input type="submit" name="sub">
	</form>
	</fieldset>
	<?php
	    if(isset($_POST['sub']))
	    {
	    	$name=$_POST["name"];
	    	if(empty($name))
	    	{
	    		echo "Error! You didn't enter a name<br>"; 
	    	}
	    	else
	    	{
	    		$name=$_POST['name'];
	    	}
	    	$len=strlen($_POST['no']);
	    	$m=($_POST['no']);
	    	if(empty($_POST['no']))
			{
				echo "Error ! You didn't Enter a number <br>";
			} 
	    	else if(!preg_match("/^[0-9]*$/",$m))
	    	{
	    		echo "Error ! Only numeric value is allowed<br>";	
	    	}
			else if($len != 10)
			{
				echo "Errror ! Mobile Number must have 10 Digits<br>";
			}
	    	else 
	    	{
	    	   echo "Your Number is : ".$m."<br>";
	    	}
	    	

	    }
	    	  	
	?>
	
</body>
</html>