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
        padding:10px 30px;
    }
    .buttons input{
        margin:0px 13px;
        width:30px;
        padding:5px 20px;
        text-align:center;
    }.box{
        border:1px solid black;
        width:300px;
        padding:20px 100px;
        margin:auto;
    }
</style>
<body>
    <?php
        if(isset($_POST['sub'])){
            if($_POST['sub'] == '+'){
                $ans=$_POST['val1']+$_POST['val2'];
            }
            else if($_POST['sub'] == '-'){
                $ans=$_POST['val1']-$_POST['val2'];
            }
            else if($_POST['sub'] == '/'){
                $ans=$_POST['val1']/$_POST['val2'];
            }
            else if($_POST['sub'] == '*'){
                $ans=$_POST['val1']*$_POST['val2'];
            }
        }else{
            $ans=0;
        }
    ?>  
    <div class="box">
    <form action="" method="post">
        <br><br>
        <label for="val1">value 1 : </label><input type="text" name="val1" value=0><br><br>
        <label for="val1">value 2 : </label> <input type="text" name="val2" value=0><br><br>
        <div class="buttons">
            <input type="submit" value="+" name="sub">
            <input type="submit" value="-" name="sub">
            <input type="submit" value="x" name="sub">
            <input type="submit" value="/" name="sub">
        </div><br>
        <label for="val1">Ans : </label> <input type="text" name="ans" value="<?php if(isset($ans)){echo $ans;}else{echo 0;}?>"><br><br>
    </form>
    </div>
</body>
</html>