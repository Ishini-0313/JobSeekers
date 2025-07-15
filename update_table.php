<?php
    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql = "ALTER TABLE personal_info ADD age int";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error());
    }
    else{
        echo "Added new column";
    }
    mysqli_close($conn);
?>