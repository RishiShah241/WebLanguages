<html>
<body>

<?php
class A {
  public $name;
  function s_name($name) 
  {
    echo $name;
  }
}


$apple = new A();
$apple->s_name("Your Name is: Rishi");

echo $apple->name;
?>
 
</body>
</html>
