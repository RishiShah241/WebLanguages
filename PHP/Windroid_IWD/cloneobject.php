<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clone object</title>
</head>
<body>
	<?php
		class MyClass
		{
			public $amount;
		}
		$value=5;
		$obj=new MyClass();
		$obj->amount=&$value;
		$copy=clone $obj;
		$obj->amount=6;
		printf($copy);
	?>
</body>
</html>