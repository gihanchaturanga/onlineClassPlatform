<?php
    include 'dbconn.php';
    $t_id = $_GET['t_id'];
    $s_id = $_GET['s_id'];
    $c_id = $_GET['c_id'];
    $query = "UPDATE payment SET payment = '1' WHERE stat = '1' AND c_id = '$c_id' AND s_id = '$s_id'";
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location: payment.php?title=SUCCESS..!&msg=Payment has marked successfully.&type=success&t_id=".$t_id."&c_id=".$c_id."&table=1");
        exit();  
    }else{
        header("location: payment.php?title=Error..!&msg=Unexpected error occured, Please try again.&type=error");
        exit(); 
    }
?>