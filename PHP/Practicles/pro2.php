<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>forms</title>
</head>
<body>
<div>
    <?php 
        if(isset($_POST["name"]) && $_POST["email"] && $_POST["phone"] && $_POST["password"])
        {$name=$_POST["name"];
        echo "name : $name <br>";
        $email=$_POST["email"];
        echo "email : $email <br>";
        $phone=$_POST["phone"];
        echo "phone : $phone <br>";
        $password=$_POST["password"];
        echo "password : $password <br> ";}
    ?>
</div>
<div class="login-box">
		<h1>Login</h1>
		<form action="" method="post">

            <div class="user-box">
				<label >name</label>
				<input type="text" name="name" placeholder="Name" required>
			</div>
			<div class="user-box">
				<label >Email</label>
				<input type="email" name="email" placeholder="Email" required>
			</div>
			<div class="user-box">
				<label >phone no</label>
				<input type="text" name="phone" placeholder="phone number" required>
			</div>
			<div class="user-box">
				<label >Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<input type="submit" value="sign up" name="submit">
		</form>
	</div>
</body>
</html>