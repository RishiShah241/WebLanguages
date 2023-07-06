<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        padding:30px 0px;
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
        <input type="text" placeholder="x" name="x">
        <input type="text" placeholder="y" name="y">
        <input type="submit" value="Submit" name="sub">
    </form>
    <?php
        // Write a script that uses the set attribute and get attribute methods to access a class’s private attributes of a class.
        class cordinates{
            public $x;
            public $y;
            public function setx($x){
                $this->x = $x;
            }
            public function sety($y){
                $this->y = $y;
            }
        }
        class cords extends cordinates{
            function display(){
                echo "<div class=\"vals\">";
                echo "<input type=\"text\" value=\"X\">";
                echo "<input type=\"text\" value=\"Y\">";
                echo "</div>";
                echo "<div class=\"vals\">";
                echo "<input type=\"text\" value=\"$this->x\">";
                echo "<input type=\"text\" value=\"$this->y\">";
                echo "</div>";
            }
        }
        if(isset($_POST["x"]) && isset($_POST["y"])){
            $x = $_POST["x"];
            $y = $_POST["y"];
            $obj = new cords();
            $obj->setx($x);
            $obj->sety($y);

            $obj->display();
        }
    ?>
</body>
</html>