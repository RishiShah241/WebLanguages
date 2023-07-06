<?php
  interface A
  {
  	function f1();
  }
  interface B
  {
  	function f2();
  }
  class C implements A,B
  {
  	function f1()
  	{
  		echo "Hi  ";
  	}
  	function f2()
  	{
  		echo "Hello";
  	}
  }
  $obj=new C();
  $obj->f1();
  $obj->f2();
?>