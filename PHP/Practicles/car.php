<!DOCTYPE html> 
<html> 
<head> 
 	<meta charset="utf-8"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	<title>car analysis</title> 
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
 	<form action=" "method="post"> 
 	Enter car name :<input type="text" name="car"><br> 
 	<input type="submit"><br> 
</form> 
 	<?php 
 	 	$name=$_POST['car'];  	 	 	
        switch ($name) { 
 	 	 	case ($name=='thar'||$name=="xuv300") : 
                                                echo "[mahindra]"; 
                                                break; 
 	 	 	case ($name=='nexon'|| $name=='Tiagoev'): 
 	 	 	 	                                echo "[TATA]"; 
 	 	 	 	                                break; 
 	 	 	case ($name=='i20'||$name=='i10'):  echo "[hyundai]"; 
 	 	 	                                    break; 
            case ($name=='amaze'):              echo "[honda]"; 
 	 	 	                                    break;  	 	 	 	
            default: 
 	 	 	 	 	echo "you have entered wrong car"; 
 	 	} 
 	?> 
</body> 
</html> 
