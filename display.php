<?php
    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql = "SELECT * FROM personal_info";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error());
    }
    else{
        echo "
            <h2>Job Seekers</h2>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                </tr>
        ";


        
    }

    mysqli_close($conn);
?>