<?php
  
  class A
  {
  	 function dis()
  	 {
  	 	 echo "From Class A <br>";
  	 }
  }
  class B extends A
  {
  	 function dis1()
  	 {
  	 	 echo "	From Class B <br>";
  	 }
  }
  class C extends B
  {
  	 function dis2()
  	 {
  	 	 echo "Fromrom Class C  <br>";
  	 }
  }
  $obj=new C();
  $obj->dis2();
  $obj->dis1();
  $obj->dis();
?>