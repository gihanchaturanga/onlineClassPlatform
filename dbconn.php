<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "platform2";

    $conn = mysqli_connect($host, $username, $password, $database);
    if(!$conn){
        //echo "database connection fail";
    }else{
        //echo "database connected";
    }
    date_default_timezone_set("Asia/Colombo");
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $date_time = date("Y-m-d H:i:s");

    function clear($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>