<?php
    include 'dbconn.php';

    $t_id = $_GET['t_id'];
    $c_id = $_GET['c_id'];

    header("location: free.php?t_id=".$t_id."&c_id=".$c_id."&table=1");
    exit();
?>