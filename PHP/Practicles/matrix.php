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
        /* padding:auto; */
        color:white;
        /* background:black; */
    }
    input{
        display:inline;
        /* width:50px; */
    }.box{
        border:1px solid black;
        width:300px;
        padding:20px 0px;
        margin:auto;
        display:flex;
        flex-direction:column;
    }
    .row{
        display:flex;
    }
    input[type="submit"]{
        text-align:center;
        background-color: lime;
        border: none;
        border-radius: 10px;
        width : 150px;
        font-size:18px;
        margin:auto;
        cursor:pointer;
    }
</style>
<body>
    <form action="" method="post">
    <div class="box">
        <div class="row">
            <input type="number" name="a[0][0]">
            <input type="number" name="a[0][1]">
            <input type="number" name="a[0][2]">
        </div>
        <div class="row">
            <input type="number" name="a[1][0]">
            <input type="number" name="a[1][1]">
            <input type="number" name="a[1][2]">
        </div>
        <div class="row">
            <input type="number" name="a[2][0]">
            <input type="number" name="a[2][1]">
            <input type="number" name="a[2][2]">
        </div>
    </div>
    <div class="box">
        <div class="row">
            <input type="number" name="b[0][0]">
            <input type="number" name="b[0][1]">
            <input type="number" name="b[0][2]">
        </div>
        <div class="row">
            <input type="number" name="b[1][0]">
            <input type="number" name="b[1][1]">
            <input type="number" name="b[1][2]">
        </div>
        <div class="row">
            <input type="number" name="b[2][0]">
            <input type="number" name="b[2][1]">
            <input type="number" name="b[2][2]">
        </div>
    </div>
    <div class="box">
        <input type="submit">
    </div>
    <div class="box">
        <?php
            if(isset($_POST["a"]) && isset($_POST["b"])){    
                $a = $_POST["a"];
                $b = $_POST["b"];
                $c = array(array(0,0,0), array(0,0,0), array(0,0,0));
                for($i=0;$i<3;$i++){
                    echo '<div class="row">';
                    for($j=0;$j<3;$j++){
                        for($k=0;$k<3;$k++){
                            $c[$i][$j] += $a[$i][$k] * $b[$k][$i];
                        }
                        $tmp = $c[$i][$j];
                        echo '<input type="number" value="'."$tmp".'">';
                    }
                    echo '</div>';
                }
            }
        ?>
    </div>
    </form>
</body>
</html>