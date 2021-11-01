<?php
    include 'dbconn.php';

    $grade = clear($_GET['grade']);
    $sub = clear($_GET['subject']);
    $plat = clear($_GET['platform']);
    $time = clear($_GET['time']);
    $day = clear($_GET['day']);
    $t_id = $_SESSION['ADMIN_ID'];
    echo $grade.$sub.$plat.$time.$day.$t_id;

    $query = "INSERT INTO class (grade, subject, platform, time, day, t_id, stat, datatime) VALUES ('$grade', '$sub', '$plat', '$time', '$day', '$t_id', '1', '$date_time')";
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location: addClass.php?title=Class Added..!&msg=".$grade." | ".$sub." class added.&type=success");
        exit(); 
    }else{
        header("location: addClass.php?title=Unexpected Error..!&msg=Unexpected error occured, Please try again.&type=info");
        exit(); 
    }
?>