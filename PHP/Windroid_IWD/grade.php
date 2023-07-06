<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade</title>
</head>
<body>
	<form action="" method="post">
		Enter marks of Maths:
		<input type="text" name="maths"><br>
        Enter marks of English:
		<input type="text" name="english"><br>
	    Enter marks of Science:
		<input type="text" name="science"><br>
	    Enter marks of S.S:
		<input type="text" name="ss"><br>
		<input type="submit" name="sub"><br><br>
		
	</form>
    <?php
      if(isset($_POST['sub']))
      {
        $maths=$_POST['maths'];
        $english=$_POST['english'];
        $science=$_POST['science'];
        $ss=$_POST['ss'];
        switch($maths)
        {
           case($maths>=85 && $maths<=100):
           $grade1="AA";
           $result="Pass";
           break;
 		   case($maths>=75 && $maths<=84):
           $grade1="AB";
           $result="Pass";
           break;
           case($maths>=65 && $maths<=74):
           $grade1="BB";
           $result="Pass";
           break;
           case($maths>=55 && $maths<=64):
           $grade1="BC";
           $result="Pass";
           break;
           case($maths>=45 && $maths<=54):
           $grade1="CC";
           $result="Pass";
           break;
           case($maths>=40 && $maths<=44):
           $grade1="CD";
           $result="Pass";
           break;
           case($maths>=35 && $maths<=39):
           $grade1="DD";
           $result="Pass";
           break;
           case($maths<35):
           $grade1="FF";
           $result="Fail";
           break;
           default: $grade1="Invaild Input";
                    $result="Invaild Input";
                    break;
        }
        switch($english)
        {
           case($english>=85 && $english<=100):
           $grade2="AA";
           $result2="Pass";
           break;
 		   case($english>=75 && $english<=84):
           $grade2="AB";
           $result2="Pass";
           break;
           case($english>=65 && $english<=74):
           $grade2="BB";
           $result2="Pass";
           break;
           case($english>=55 && $english<=64):
           $grade2="BC";
           $result2="Pass";
           break;
           case($english>=45 && $english<=54):
           $grade2="CC";
           $result2="Pass";
           break;
           case($english>=40 && $english<=44):
           $grade2="CD";
           $result2="Pass";
           break;
           case($english>=35 && $english<=39):
           $grade2="DD";
           $result2="Pass";
           break;
           case($english<35):
           $grade2="FF";
           $result2="Fail";
           break;
           default: $grade2="Invaild Input";
                    $result2="Invaild Input";
                    break;
        }
        switch($science)
        {
           case($science>=85 && $science<=100):
           $grade3="AA";
           $result3="Pass";
           break;
 		   case($science>=75 && $science<=84):
           $grade3="AB";
           $result3="Pass";
           break;
           case($science>=65 && $science<=74):
           $grade3="BB";
           $result3="Pass";
           break;
           case($science>=55 && $science<=64):
           $grade3="BC";
           $result3="Pass";
           break;
           case($science>=45 && $science<=54):
           $grade3="CC";
           $result3="Pass";
           break;
           case($science>=40 && $science<=44):
           $grade3="CD";
           $result3="Pass";
           break;
           case($science>=35 && $science<=39):
           $grade3="DD";
           $result3="Pass";
           break;
           case($science<35):
           $grade3="FF";
           $result3="Fail";
           break;
           default: $grade3="Invaild Input";
                    $result3="Invaild Input";
                    break;
        }
        switch($ss)
        {
           case($ss>=85 && $ss<=100):
           $grade4="AA";
           $result4="Pass";
           break;
 		   case($ss>=75 && $ss<=84):
           $grade4="AB";
           $result4="Pass";
           break;
           case($ss>=65 && $ss<=74):
           $grade4="BB";
           $result4="Pass";
           break;
           case($ss>=55 && $ss<=64):
           $grade4="BC";
           $result4="Pass";
           break;
           case($ss>=45 && $ss<=54):
           $grade4="CC";
           $result4="Pass";
           break;
           case($ss>=40 && $ss<=44):
           $grade4="CD";
           $result4="Pass";
           break;
           case($ss>=35 && $ss<=39):
           $grade4="DD";
           $result4="Pass";
           break;
           case($ss<35):
           $grade4="FF";
           $result4="Fail";
           break;
           default: $grade4="Invaild Input";
                    $result4="Invaild Input";
                    break;
        }
      }
   ?>
   <form>
   	<table border="1">
			<th>Subject</th>
			<th>Grade</th>
			<th>Result</th>
			<tr>
			   <td>Maths</td>
			   <td><?php echo $grade1;?></td>
			   <td><?php echo $result;?></td>
            </tr>
            <tr>
			   <td>English</td>
               <td><?php echo $grade2;?></td>
			   <td><?php echo $result2;?></td>
            </tr>
            <tr>
			   <td>Science</td>
			   <td><?php echo $grade3;?></td>
			   <td><?php echo $result3;?></td>
            </tr>
            <tr>
			   <td>S.S</td>
			   <td><?php echo $grade4;?></td>
			   <td><?php echo $result4;?></td>
            </tr>
        </table>
   </form>
</body>
</html>