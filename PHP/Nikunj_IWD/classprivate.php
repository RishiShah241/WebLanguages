<!DOCTYPE html>
<html>
<body>

<?php
class MyClass 
{
  private $num = 100;

  public function setname() 
  {
    $this->num++;
 }

 public function getNumber() 
 {
    return $this->num;
}
}

$obj = new MyClass();
$obj->add1();
echo "The number is " . $obj->getNumber();
?>

</body>
</html>
