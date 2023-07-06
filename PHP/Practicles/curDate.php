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
    <?php
        // Write a script to display the current date and time in different formats.
        echo "<div class=\"vals\">";
        echo "<input type=\"text\" value=\"dd/mm/yyyy\">";
        echo "<input type=\"text\" value=\"dd/mm/yy\">";
        echo "<input type=\"text\" value=\"dd/mmm/yyyy\">";
        echo "</div>";
        echo "<div class=\"vals\">";
        $date = date("d/m/Y");
        echo "<input type=\"text\" value=\"$date\">";
        $date = date("d/m/y");
        echo "<input type=\"text\" value=\"$date\">";
        $date = date("d/M/Y");
        echo "<input type=\"text\" value=\"$date\">";
        echo "</div>";
    ?>
</body>
</html>