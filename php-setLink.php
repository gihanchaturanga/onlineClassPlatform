<?php

    include 'dbconn.php';
    $user_id = $_SESSION['ADMIN_ID'];
    $query = "SELECT * FROM class WHERE stat = '1' AND t_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $link = $_GET[$id];
        if($_GET[$id] != ""){
            $query2 = "UPDATE class SET link = '$link' WHERE id = '$id'";
            $result2 = mysqli_query($conn, $query2);
            if($result2 != 1){
                header("location: setLink.php?title=Unexpected Error..!&msg=Unexpected error occure, Please try again.&type=error");
                exit();
            }
        }
    }
    header("location: setLink.php?title=Links Updated..!&msg=Links updated successfully.&type=success");
    exit();

?>