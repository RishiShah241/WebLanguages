<?php
  class A
  {
  	 function operation(int $a,int $b)
  	 {
  	   	$res=$a+$b;
  	   	echo "Addition = $res <br>";
  	 }
  }
  class B extends A
  {
  	 function operation(int $a,int $b)
  	{
  		$res=$a*$b;
  		echo "Multiplication = $res <br>";
  	}
  }
  $obj=new B();
  $obj->operation(20,10);
?>
