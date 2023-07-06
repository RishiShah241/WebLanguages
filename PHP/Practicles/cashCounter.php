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
    .counters{
        display:flex;
    }
    .text{
        width:300px;
        border:1px solid red;
    }
</style>
<body>
    <div class="box">
        <form action="" method="post">
            <div class="counters">
                <label for="Ruppes" class="text">Enter the Total Amount :</label>
                <input type="number" name="Ruppes">
            </div>
            <input type="submit" value="Submit" name="sub">
            <?php
                // echo "hello world";
                if(isset($_POST['Ruppes'])){
                    // echo "hello world";
                    $notes = array(
                        2000=>0,
                        500=>0,
                        200=>0,
                        100=>0,
                        50=>0,
                        20=>0,
                        10=>0,
                        5=>0,
                        2=>0,
                        1=>0
                    );
                    function counter($note,$amount){
                        if($amount>=$note)
                            return $amount-$note;
                        return $amount;
                    }
                    $amount = $_POST['Ruppes'];
                    $total = $amount;
                    foreach($notes as $note => $count){
                        while($amount>=$note){
                            $tmp = counter($note,$amount);
                            if($tmp!=$amount){
                                $amount=$tmp;
                                $count=$count+1;
                            }
                        }
                        if($count!=0){
                            echo '<div class="counters"> <label> '.$note.' </label>';
                            echo '<input type="text" class="ans" value="'.$count.'"> </div>';
                        }
                        if($amount==0)
                        break;
                    }
                    echo '<div class="counters"> <label> Total </label>';
                    echo '<input type="text" class="ans" value="'.$total.'"> </div>';
                }
            ?>
        </form>
    </div>
</body>
</html>