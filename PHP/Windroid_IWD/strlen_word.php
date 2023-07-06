<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
	Enter a string:
	<input type="text" name="str"><br>
	<input type="submit" name="sub">
    </from>
    <?php
    	if(isset($_POST["sub"]))
    	{
    		$str=$_POST["str"];
    		$i=0;
    		$j=1;
    		while(@$str[$i]!=NULL)
    		{
    			    if(@$str[$i]==" ")
           		 	{
               		  $j=$j+1;
            		}
    			$i=$i+1;
    		}
    		echo "<br>Lenght of String is: $i";

            echo "<br> Words in String is: $j";
    	}

    ?>
</body>
</html>