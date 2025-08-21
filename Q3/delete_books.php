<?php
    include("conn.php");

    mysqli_select_db($conn , "library");

    extract($_POST);

    if(isset($_POST['dltbtn'])){
        $sql = "DELETE FROM books where book_id = '".$id."'";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            die("invalid query ".mysqli_error());
        }
        else{
            echo "data row deleted.";
        }
    }
    mysqli_close($conn);
?>