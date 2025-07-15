<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";

    //create connection

    $conn = mysqli_connect($serverName , $userName , $password );

    //check connection

    if(!$conn){
        die("Connection failed!".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully<br>";
    }
?>