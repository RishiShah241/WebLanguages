<?php
  class A
  {
  	 private $name;
  	 public function setname($name)
  	 {
  	 	$this->name=$name;
  	 } 
  	 public function getname()
  	 {
  	 	return  $this->name;
  	 } 
  }
  	 $obj=new A();
  	 $obj->setname("Rishi");
  	 echo "Your Name is: ".$obj->getname();
?>
