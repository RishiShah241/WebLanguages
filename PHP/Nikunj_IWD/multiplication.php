<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication Table</title>
</head>
<body>
     <form action="" method="post">
     	Enter a number:
     	<input type="text" name="tab"><br>
     	<input type="submit" name="sub">
     </form>
     <?php
        
        if(isset($_POST["sub"]))
        {

          $num=$_POST["tab"];
          echo "Multiplacation table of $num is:<br>";
         // echo "<table border= 1>";
          for($i=1;$i<=10;$i++)
          {
              echo "$num*$i= $num*$i";
             // echo "<tr>";
             // echo "<td>$num * $i</td>";
              //echo "<td> = </td>";
              //echo "<td>$res </td>";
             // echo "</tr>";
          }
          //echo "</table>";
        }

     ?>
</body>
</html>