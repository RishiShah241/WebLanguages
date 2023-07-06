<?php
$arr = array('Nikunj','nikunj');

   foreach ($arr as $x) 
   {
      if (ctype_lower($x))
      {
         echo "$x consists of all lowercase letters.";
      }
      else
      {
         echo "$x does not have all lowercase letters. ";
      }
   }
?>
