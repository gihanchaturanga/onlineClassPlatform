<?php
include 'dbconn.php';

$mobile = clear($_POST['mobile']);
$pwd = clear($_POST['pwd']);
$remember = $_POST['remember'];
echo $mobile.$pwd.$remember;

if($mobile != "" && $pwd != ""){
    $query = "SELECT id, name FROM student WHERE stat = '1' AND mobile = '$mobile' AND password = '$pwd'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo "<br> this is databse : ".$row['id'].$row['name'];
        $_SESSION["USER_ID"] = $row['id'];
        $_SESSION["USER_NAME"] = $row['name'];
        $sess_id = $_SESSION["USER_ID"];
        $sess_name = $_SESSION["USER_NAME"];
        if(isset($sess_id) && isset($sess_name)){
            echo "session set";
        }else{
            header("location: index.php?session not set&title=Session Faild!&msg=Sessions cannot be set.&type=error");
            exit();
        }
        if($remember == 1){
            setcookie('USER_ID', $row['id'], time()+2592000);
            if(isset($_COOKIE['USER_ID'])){
                echo "cookie set";
            }
        }
        header("location: profile.php");
        exit();
    }
}else{
    header("location: register.php?title=Empty Fields..!&msg=Fill all of the fields.&type=warning");
    exit();
}

?>