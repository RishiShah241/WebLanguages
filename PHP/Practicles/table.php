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
        min-width:65px;
        border:none;
        color:#fff;
        text-align:center;
    }
    tr{
        background-color: #222;
    }
    .odd{
        background-color: #112;
    }
</style>
<body>
    <div class="box">
        <form action="" method="post">
            <br><br>
            <label for="num">Enter Number : </label> <input type="number" name="num"><br><br>
            <center><input type="submit" value="Next" name="sub"></center><br>
        </form>
        <table style="border-spacing : 0px;">
            <?php 
                if(isset($_POST['num'])){   
                    $n=$_POST['num'];
                    echo '<tr>';
                    for($i=1;$i<=10;$i++){
                        echo "<td> $n</td>";
                        echo "<td> *</td>";
                        echo "<td> $i</td>";
                        echo "<td> =</td>";
                        $ans=$n*$i;
                        echo "<td> $ans </td>";
                        if($i%2){
                            echo '<tr class="odd">';
                        }
                        else{
                            echo "</tr><tr>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html> 