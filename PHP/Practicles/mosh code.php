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
    input[type="text"]{
        font-size:large;
        border-radius:5px;
        color:red;
    }
</style>
<body>
    <form action="" method="post">
    <div class="box">
        <input type="text" name="String">
    </div>
    <div class="box">
        <input type="submit">
    </div>
    <div class="box">
        <?php
            if(isset($_POST["String"])){
                $str = strtoupper($_POST["String"]);
                $assoc_arr = array(
                    "A"=>".-",
                    "B"=>"-...",
                    "C"=>"-.-.",
                    "D"=>"-..",
                    "E"=>".",
                    "F"=>"..-.",
                    "G"=>"--.",
                    "H"=>"....",
                    "I"=>"..",
                    "J"=>".---",
                    "K"=>"-.-",
                    "L"=>".-..",
                    "M"=>"--",
                    "N"=>"-.",
                    "O"=>"---",
                    "P"=>".--.",
                    "Q"=>"--.-",
                    "R"=>".-.",
                    "S"=>"...",
                    "T"=>"-",
                    "U"=>"..-",
                    "V"=>"...-",
                    "W"=>".--",
                    "X"=>"-..-",
                    "Y"=>"-.--",
                    "Z"=>"--..",
                    "1"=>".----",
                    "2"=>"..---",
                    "3"=>"...--",
                    "4"=>"....-",
                    "5"=>".....",
                    "6"=>"-....",
                    "7"=>"--...",
                    "8"=>"---..",
                    "9"=>"----.",
                    "0"=>"-----",
                    ","=>"--..--",
                    "."=>".-.-.-",
                    "?"=>"..--..",
                    "/"=>"-..-.",
                    "-"=>"-....-",
                    "("=>"-.--.",
                    ")"=>"-.--.-"
                );
                $moshStr = "";
                for($i=0;$i<strlen($str);$i++){
                    foreach($assoc_arr as $letter => $code){
                        if($letter==$str[$i]){
                            $moshStr = implode("",array($moshStr,$code));
                        }
                    }
                }
                echo '<input type="text" value="'.$moshStr.'">';
            }
        ?>
    </div>
    </form>
</body>
</html>