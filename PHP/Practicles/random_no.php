<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings PHP</title>
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
    }.counters{
        margin:auto;
        display:flex;
    }
</style>
<body>
    <div class="box">
        <form action="" method="post">
            <label for="string">Enter the Range:</label>
            <div class="counters">
                <input type="number" name="start">
                <input type="number" name="end">
            </div>
            <input type="submit" value="Submit" name="sub">
            <?php
                if(isset($_POST["sub"])){
                    $start = $_POST["start"];
                    $end   = $_POST["end"];
                    $random = rand($start,$end);
                    // echo '<input type="text" value="'.$random.'" name="sub">';
                }
            ?>
            <input type="text" value="<?php if(isset($random)){echo $random;} ?>" name="sub">
        </form>
    </div>
</body>
</html>