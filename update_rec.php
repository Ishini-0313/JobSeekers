<?php
    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql = "UPDATE personal_info  SET title ='Mrs' where id = '3' ";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error());
    }
    else{
        echo "Data Updated";
    }
    mysqli_close($conn);
?>