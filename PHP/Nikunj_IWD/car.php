<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cars</title>
</head>
<body>
   <form action="" method="post">
   Choose a car:
   <input type="text" name="car"><br>
   <input type="submit"  value="submit">
   </form>
   <?php  
   $car=$_POST['car'];
   switch(true)
   {
      case($car=="Safari" || $car=="Nexon" || $car=="Tigor" || $car=="Tiago"): echo "Tata";
                                                                               break;
      case($car=="XUV700" || $car=="XUV300" || $car=="Bolero"): echo "Mahindra";
                                                                break;
      case($car=="i20" || $car=="Verna" || $car=="Venue" || $car=="Creta"): echo "Hyundai";
                                                                               break;
     case($car=="Swift" || $car=="Alto" || $car=="Baleno" || $car=="Brezza"): echo "Suzuki";
                                                                               break;
      default: echo "Invaild input";
       		   break;
   }
   ?>
</body>
</html>