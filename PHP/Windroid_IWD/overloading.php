<?php
  class A
  {
	function operation($a, $b){
		$res=$a+$b;
		echo "Addition = $res <br>";
	}
  	function operation($a){
  		$res=$a*$a;
  		echo "Multiplication = $res <br>";
  	}
  }
  $obj=new A();
  $obj->operation(10,20);
  $obj->operation(10);
?>
