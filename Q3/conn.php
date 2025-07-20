<?php
    $servarname = "localhost";
    $username = "root";
    $pwd = "";

    $conn = mysqli_connect($servarname , $username ,$pwd );

    if(!$conn){
        die("Connection failed ".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully";
    }

?>