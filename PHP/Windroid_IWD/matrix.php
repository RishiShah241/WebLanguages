<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>3 * 3 Matrix</title>
</head>
<body>
	<form action="" method="post">
		<table>
              <tr>
 				 <th>Matrix 1</th>
              </tr>
              <tr>
                 <td><input type="text" name="a[0][0]"></td>
                 <td><input type="text" name="a[0][1]"></td>
                 <td><input type="text" name="a[0][2]"></td>
              </tr>
              <tr>
                 <td><input type="text" name="a[1][0]"></td>
                 <td><input type="text" name="a[1][1]"></td>
                 <td><input type="text" name="a[1][2]"></td>
              </tr>
              <tr>
                 <td><input type="text" name="a[2][0]"></td>
                 <td><input type="text" name="a[2][1]"></td>
                 <td><input type="text" name="a[2][2]"></td>
              </tr>
               <tr>
 				 <th>Matrix 2</th>
              </tr>
              <tr>
                 <td><input type="text" name="b[0][0]"></td>
                 <td><input type="text" name="b[0][1]"></td>
                 <td><input type="text" name="b[0][2]"></td>
              </tr>
              <tr>
                 <td><input type="text" name="b[1][0]"></td>
                 <td><input type="text" name="b[1][1]"></td>
                 <td><input type="text" name="b[1][2]"></td>
              </tr>
              <tr>
                 <td><input type="text" name="b[2][0]"></td>
                 <td><input type="text" name="b[2][1]"></td>
                 <td><input type="text" name="b[2][2]"></td>
              </tr>
		</table>
		<input type="Submit" name="s1"><br>
	</form>
<?php
   if(isset($_POST["s1"]))
   {
      $a=$_POST["a"];
      $b=$_POST["b"];
      $result=array();
      for($i=0;$i<=2;$i++)
      {
      	 for($j=0;$j<=2;$j++)
      	 {
      	 	$result[$i][$j]=0;
      	 	for($k=0;$k<=2;$k++)
      	   {
      	 	 $result[$i][$j]+= $a[$i][$k]*$b[$k][$j];
      	   }
      	 }
      }
       for($i=0;$i<=2;$i++)
      {
      	 for($j=0;$j<=2;$j++)
      	 {
      	 	echo "".$result[$i][$j];
      	 	echo "    ";
      	 }
      	 echo "</br><br>";
      }
  }
?>

</body>
</html>