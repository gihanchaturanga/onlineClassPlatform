<?php
    include 'dbconn.php';

    $grade = clear($_GET['grade']);
    $subject = clear($_GET['subject']);
    $platform = clear($_GET['platform']);
    $time = clear($_GET['time']);
    $day = clear($_GET['day']);
    $id = clear($_GET['add']);
    echo $grade.$subject.$platform.$time.$day.$id;

    $query = "UPDATE class SET grade = '$grade', subject = '$subject', platform = '$platform', time = '$time', day = '$day' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location: editClass.php?title=Class Updated..!&msg=Class Details has updated successfully.&type=success");
        exit();
    }else{
        header("location: updateClass.php?title=Unexpected Error..!&msg=Unexpected error occure, Please try again.&type=error");
        exit();
    }
?>