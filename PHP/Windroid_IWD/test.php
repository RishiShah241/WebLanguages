<?php

// Declare a variable and initialize it
$geeks = 'd.coom';

// Use preg_match() function to check match
if(preg_match('/[.a-z]+\.coom/', $geeks)){
    print_r($geeks);
}else{
    echo "not run";
}


?>
