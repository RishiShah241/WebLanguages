<?php
  if(isset($_GET["name"]) || isset($_GET["age"]))
  {
  		echo "Welcome ".$_GET['name']."<br>";
  		echo "You are ".$_GET['age']." years old.";
  }
?>