<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["Name"] = "Rishi";
$_SESSION["Age"] = "17";
echo "Session variables are set.<br>";
echo "Your Name is " . $_SESSION["Name"] . ".<br>";
echo "Your Age is : " . $_SESSION["Age"] . ".";
?>

</body>
</html>
