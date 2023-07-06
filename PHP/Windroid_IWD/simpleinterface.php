<?php
  interface A
  {
  	function f1();
    function f2();
  }
  class C implements A
  {
  	function f1()
  	{
  		echo "Welcome to simple interface Program<br>";
  	}
  	function f2()
  	{
  		echo "This function is define in interface class";
  	}
  }
  $obj=new C();
  $obj->f1();
  $obj->f2();
?>