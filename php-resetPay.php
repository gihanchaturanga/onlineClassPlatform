<?php
    include 'dbconn.php';
    $web = $_GET['web'];
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $query = "UPDATE payment SET payment = '0' WHERE stat = '1' AND payment = '1'";
        $res = mysqli_query($conn, $query);
        if($res == 1){
            header("location: ".$web."?title=Payment Reseted..!&msg=All of the payments has reseted.&type=success");
            exit();
        }else{
            header("location: register.php?title=Error..!&msg=Unexpected error occured, Please try again.&type=error");
            exit(); 
        }
    }
?>
