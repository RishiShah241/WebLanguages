<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Validation Form</title>
</head>
<body class="bg-dark">
    <form action="" method="post">
        <div class="container py-3 text-light mt-3 bg-secondary border-success">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">First Name : </div>
                <input class="col-3" type="text" placeholder="Enter The First Name" name="fName">
                <div class="col-3"></div>
            </div>
            
            <div class="row pt-3">
                <div class="col-3"></div>
                <div class="col-3">Last Name : </div>
                <input class="col-3" type="text" placeholder="Enter The Middel Name" name="mName">
                <div class="col-3"></div>
            </div>
            
            <div class="row pt-3">
                <div class="col-3"></div>
                <div class="col-3">Middle Name : </div>
                <input class="col-3" type="text" placeholder="Enter The Last Name" name="lName">
                <div class="col-3"></div>
            </div>
            <div class="row pt-3">
                <div class="col-3"></div>
                <div class="col-3">Phone Number : </div>
                <input class="col-3" type="text" placeholder="Enter The Phone Number" name="phoneNo">
                <div class="col-3"></div>
            </div>
            <div class="row pt-3">
                <div class="col-3"></div>
                <div class="col-3">Gender : </div>
                <div class="col-3">
                    <span class="col-6">
                        <input type="radio" name="gen" id="male"> Male
                    </span>
                    <span class="col-6">
                        <input type="radio" name="gen" id="female"> Female
                    </span>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row pt-3">
                <div class="col-3"></div>
                <div class="col-3">Address : </div>
                <div class="col-3">
                    <textarea name="address" id="" cols="45" rows="5"></textarea>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row pt-3">
                <center>
                    <input class="btn btn-primary btn-sm" type="submit" name="Submit">
                </center>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST["uName"])){
            $name = $_POST["uName"];
            echo "$name";
        }
    ?>
</body>
</html>