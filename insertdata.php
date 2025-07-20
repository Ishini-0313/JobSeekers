<?php
    extract($_POST);

    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql = "INSERT INTO personal_info (title,name,gender,dob) VALUES ('$title','$name','$gender','$dob')";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query".mysqli_error());
    }
    else{
        echo "data inserted";
    }
    mysqli_close($conn);
?>