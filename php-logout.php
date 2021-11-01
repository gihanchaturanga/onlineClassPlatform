<?php
    include 'dbconn.php';

    if(isset($_GET['LOGOUT'])){
        $log = $_GET['LOGOUT'];
        session_destroy();
        setcookie('USER_ID', "", time()-3600);
        setcookie('USER_NAME', "", time()-3600);
        setcookie('POSITION', "", time()-3600);
        setcookie('ADMIN_ID', "", time()-3600);
        setcookie('ADMIN_NAME', "", time()-3600);
        header("location: ".$log."?logedout");
        exit();
    }
?>