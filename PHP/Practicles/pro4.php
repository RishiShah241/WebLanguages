<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <?php
        if(isset($_POST["sub"])){
            if(isset($_POST["sal"]))
                $sal=$_POST["sal"];
            else
                $sal=0;
            if(isset($sal)){
                $DA=$sal*0.5;
                $HRA=$sal*0.01;
                $Medical=$sal*0.04;
                $Gross=$sal+$DA+$HRA+$Medical;
                $Insurance=$Gross*0.07;
                $PF=$Gross*0.05;
                $DS=$Insurance+$PF;
                $net=$Gross-$DS;
            }
        }
    ?>
    <div class="box">
        <form action="" method="post">
            <br><br>
            <label for="val1">Your Salary : </label><input type="text" name="sal"><br><br>
            <input type="submit" value="Calculate" name="sub"><br>
            <table>
                <tr>
                    <td><label for="val1">DA : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $DA;}else{echo 0;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">HRA : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $HRA;}else{echo 0;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">Medical : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $Medical;}else{echo 0;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">Insurance : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $Insurance;}else{echo 0;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">PF : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $PF;}else{echo 0;}?>"><br><br></td>
                </tr>        
                <tr>
                    <td><label for="val1">Net : </label></td>
                    <td><br><input type="text" value="<?php if(isset($sal)){echo $net;}else{echo 0;}?>"><br><br></td>
                </tr>        
            </table>
        </form>
    </div>
</body>
</html>