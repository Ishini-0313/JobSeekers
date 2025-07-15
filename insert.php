<?php
    include("conn.php");

    mysqli_select_db($conn , "jobseekers");

    $sql2 = "INSERT INTO  personal_info VALUES(1,'Ms' , 'K. Sedara' , 'F' , '1980-11-02')";
    $sql3 = "INSERT INTO  personal_info VALUES(2,'Mr' , 'S. Alwis' , 'M' , '1969-03-03')";
    $sql4 = "INSERT INTO  personal_info VALUES(3,'Prof' , 'A. Perera' , 'F' , '1982-04-14')";

    $sql5 = "INSERT INTO personal_info(title , name , gender , dob) VALUES ('Ms' , 'M. Ishini' , 'F' , '2001-03-13')";

    $result = mysqli_query($conn ,$sql5);

    mysqli_close($conn);
?>