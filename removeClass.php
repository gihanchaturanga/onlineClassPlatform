<?php
    include 'dbconn.php';

    $id = $_GET['id'];
    $query = "UPDATE class SET stat = '0' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location: editClass.php?title=Class Removed..!&msg=Class removed successfully.&type=success");
        exit();
    }else{
        header("location: editClass.php?title=Unexpected Error..!&msg=Unexpected error occured, Please try again.&type=error");
        exit();
    }
?>