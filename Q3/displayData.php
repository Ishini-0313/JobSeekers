<?php
    include("conn.php");

    mysqli_select_db($conn , "library");

    $sql = "SELECT * FROM books";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("invalid query ".mysqli_error());
    }
    else{
        echo "
            <table border='1'>
                <tr>
                    <th>Author</th>
                    <th>Book name</th>
                    <th>ISBN NO</th>
                    <th></th>
                    <th></th>
                </tr>
        ";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>".$row['author']."</td>";
                echo "<td>".$row['book_name']."</td>";
                echo "<td>".$row['isbn_no']."</td>";
                //delete btn
                echo "<form action='delete_books.php' method='post'>
                        <input type='hidden' name='id' value='".$row['book_id']."'>
                        <td><input type='submit' value='Delete' name='dltbtn'></td>
                    </form>";
                
            echo "</tr>";
        }

        echo "</table>";
    }
    mysqli_close($conn);
?>