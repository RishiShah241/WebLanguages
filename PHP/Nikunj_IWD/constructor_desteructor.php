<html>
    <?php

class A
    {
 
        function __construct()
        {
            echo "constructor &";

        }
        function __destruct()
        {
            echo "destroying ";
        }
    }
$obj = new A();
 
?>
</html>