<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Currency System</title>
</head>
<body>
	<form action="" method="post">
		Enter Currency: <input type="text" name="amount"><br>
		<input type="submit" name="btn"><br> 	
	<?php
		$amount=$_POST['amount'];
		if (isset($_POST['amount']))
		{
			function CurrencySystem($amount)
			{
				$notes=array(100,50,20,10,5,2,1);
				$noteCounter=array(0,0,0,0,0,0,0);
				for ($i=0; $i < 7 ;$i++) 
				{ 
					if($amount>=$notes[$i])
					{
						$noteCounter[$i]=intval($amount/$notes[$i]);
						$amount=$amount % $notes[$i];
					}
				}
				echo("Currency count: <br>");
				for ($i=0; $i < 7 ; $i++) 
				{ 
					if ($noteCounter[$i]!=0)
					{
						echo ($notes[$i]." : " . $noteCounter[$i]." ");
						echo "<br>";
					}
				}
			}
		}
		CurrencySystem($amount);
	?>
</form>
</body>
</html>