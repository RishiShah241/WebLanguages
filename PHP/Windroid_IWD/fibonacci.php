<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fibonnaci Series</title>
</head>
<body>
	<form action="" method="post">
		<label>Enter a number:</label>
		<input type="text" name="num"><br>
		<input type="Submit" name="Sub">
	</form>
    <?php
        if(isset($_POST["num"]))
        {
           $n=$_POST["num"];
           $sum=0;
           $n1=0;
           $n2=1;
           echo "Fibonacci Series of $n is :";
           for($i=0;$i<$n;$i++)
           {
           	   
               $sum=$n1+$n2;
               echo $n1;
               echo " ";
               $n1=$n2;
               $n2=$sum; 
           }
        }
    ?>
</body>
</html>