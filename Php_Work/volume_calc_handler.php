<?php
//Check if the button has been clicked.
if (isset($_POST["c"])){
    //Start receiving data from the user
    $radius = $_POST["r"];
    $height = $_POST["h"];
    $username = $_POST["u"];
    $password = $_POST["p"];
    //Chech if the username and password are correct
    if ($username == "eMobilis" and $password == "eMobilis@123"){
        //Proceed to caclculate the volume
        $volume = pi() * pow($radius, 2) * $height;
        echo "Your volume is $volume";
    } else {
        echo "Wrong email or password";
    }
}