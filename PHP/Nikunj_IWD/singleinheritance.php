<!DOCTYPE html>
<html>
<body>

<?php
class name1 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro(){
    echo " {$this->name} {$this->color}.";                                                                                                                                                                     
  }   
}

class name2 extends name1 {
  public function message() {
    echo "Welcome!"; 
  }
}

$name2 = new name2("Hello", "freind");
$name2->message();
$name2->intro();
?>
 
</body>
</html>
