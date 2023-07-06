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
        color:white;
        /* background:black; */
    }
    input{
        margin:auto;
    }.box{
        border:1px solid black;
        width:300px;
        padding:20px 100px;
        margin:auto;
    }label{
        width:80px;
        text-align:right;
        margin-top:-10px;
    }input[type="submit"]{
        background-color: lime;
        border: none;
        border-radius: 10%;
        font-size:18px;
        cursor:pointer;
    }
</style>
<body>
    <?php
        if(isset($_POST["string"])){
            $str = $_POST["string"];
            $word = 1;
            for($i=0;@$str[$i]!=NULL;$i++){
                if(@$str[$i]==' '){
                    $word++;
                }
            }
            $char = $i;
        }
    ?>
    <div class="box">
        <form action="" method="post">
            <br><br>
            <label for="val1">Your String : </label><input type="text" name="string" value="<?php  ?>"><br><br>
            <center><input type="submit" value="Next" name="sub"></center><br>
            <table>
                <tr>
                    <td><label for="val1">Characters : </label></td>
                    <td><br><input type="text" value="<?php if(isset($char)){echo $char;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">Words : </label></td>
                    <td><br><input type="text" value="<?php if(isset($word)){echo $word;}?>"><br><br></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>