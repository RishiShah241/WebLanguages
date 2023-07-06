<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number System Conversion</title>
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
        <input type="text" name="ang" placeholder="Enter the Angle">
        <input type="submit" value="Submit" name="sub">
    </form>
    <?php
        // to display the sin, cos and tan of the given angle.
        if(isset($_POST["ang"])){
            $ang = $_POST["ang"];
            $sin = sin($ang);
            $cos = cos($ang);
            $tan = tan($ang);
            echo "<div class=\"vals\">";
            echo "<input type=\"text\" value=\"sin\">";
            echo "<input type=\"text\" value=\"cos\">";
            echo "<input type=\"text\" value=\"tan\">";
            echo "</div>";
            echo "<div class=\"vals\">";
            echo "<input type=\"text\" value=\"$sin\">";
            echo "<input type=\"text\" value=\"$cos\">";
            echo "<input type=\"text\" value=\"$tan\">";
            echo "</div>";
        }
    ?>
</body>
</html>