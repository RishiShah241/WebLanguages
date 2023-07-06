<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cunstructor And Destructor </title>
</head>

<style>
    body{
        padding:30px 0px;
        color:white;
        /* background:black; */
    }
    input{
        margin:auto;
        display:block;
        margin-top:10px;
        font-size:larger;
    }.box{
        border:1px solid black;
        width:85%;
        padding:20px 100px;
        display:flex;
        flex-direction: column;
        /* margin:auto; */
        text-align:center;
    }label{
        padding:5px;
        min-width:50px;
        font-size:larger;
        margin-top:10px;
        max-width:max-content;
        /* border:1px solid red; */
    }input[type="submit"]{
        background-color: lime;
        border-radius: 10%;
        font-size:18px;
        cursor:pointer;
        border: none;
        margin-bottom:10px;
    }.vals{
        margin:auto;
        display:flex;
    }
</style>
<body>        
    <form action="" method="post">
        <input type="text" name="x" placeholder="Enter the Number">
        <input type="text" name="y" placeholder="Enter the Number">
        <input type="submit" value="Submit" name="sub">
    </form>
    <?php
        // Create an object of a class and access its public properties and methods
        class cordinates{
            public $x;
            public $y;
            function __construct($x,$y){
                $this->x = $x;
                $this->y = $y;
            }
        }
        if(isset($_POST["sub"])){
            $x = $_POST["x"];
            $y = $_POST["y"];
            $obj = new cordinates($x,$y);
            echo "<div class=\"vals\">";
            echo "<input type=\"text\" value=\"X\">";
            echo "<input type=\"text\" value=\"Y\">";
            echo "</div>";
            echo "<div class=\"vals\">";
            echo "<input type=\"text\" value=\"$obj->x\">";
            echo "<input type=\"text\" value=\"$obj->y\">";
            echo "</div>";
        }
    ?>
</body>
</html>