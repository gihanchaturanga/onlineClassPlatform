<?php
    include 'dbconn.php';
    $c_id = $_GET['c_id'];
    $s_id = $_SESSION["USER_ID"];

    $query = "UPDATE payment SET stat = '0' WHERE s_id = '$s_id' AND c_id = '$c_id'";
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location: leave_clz.php?title=Class Removed..!&msg=Class has Removed successfully.&type=success");
        exit();
    }else{
        header("location: leave_clz.php?title=Unexpected Error..!&msg=Unexpected error occured, Please try again.&type=error");
        exit();
    }
?>