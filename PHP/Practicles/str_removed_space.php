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
        padding:10px 30px;
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
        width:300px;
        padding:20px 100px;
        margin:auto;
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
    }
</style>
<body>
    <div class="box">
        <form action="" method="post">
            <div class="counters">
                <label for="string">Enter the String:</label>
                <input type="name" name="string">
            </div>
            <input type="submit" value="Submit" name="sub">
            <?php
                if(isset($_POST["string"])){
                    $str = str_replace(' ','',$_POST['string']);
                    echo "<label> New String : </label>";
                    echo '<input type="text" value="'.$str.'">';
                }
            ?>
        </form>
    </div>
</body>
</html>