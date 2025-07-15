<?php
    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql1 = "CREATE TABLE personal_info(
        id int auto_increment primary key , 
        title varchar(10) , 
        name varchar(10),
        gender varchar(10),
        dob date)";

    $result1 = mysqli_query($conn , $sql1);

    if(!$result1){
        die("Invalid query");
    }
    else{
        echo "personal_info table created.";
    }
        
    mysqli_close($conn);
?>