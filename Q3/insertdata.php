<?php   
    extract($_POST);

    include("conn.php");

    mysqli_select_db($conn , "library");

    $sql = "INSERT INTO books (author,book_name,isbn_no) VALUES ('$author','$name','$no')";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("invalid query ".mysqli_error());
    }
    else{
        echo "data inserted successfully";
    }

    mysqli_close($conn);
    
?>