<?php
    include("conn.php");

    $sql = "CREATE DATABASE IF NOT EXISTS jobseekers";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Inavalid Query ".mysqli_error());
    }
    else{
        echo "Database Created";
    }

    mysqli_close($conn);
?>