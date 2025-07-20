<?php
    include("conn.php");

    // $sql = "CREATE DATABASE LIBRARY";

    // $result = mysqli_query($conn , $sql);

    // if(!$result){
    //     die("Invalid query ".mysqli_error());
    // }
    // else{
    //     echo "database created succesfully";
    // }

    mysqli_select_db($conn , "library");

    $sql = "CREATE TABLE BOOKS (
        book_id int primary key,
        author varchar (50),
        book_name varchar(70),
        isbn_no int 
    )";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error());
    }
    else{
        echo "book table created";
    }

    mysqli_close($conn);
?>
