<?php 
    session_start();
    include 'dbconn.php';
    $id = $_GET['id'];
    $name = $_GET['name'];
    $class = $_GET['class'];
    $user = $_SESSION["USER_ID"];
    if(isset($_SESSION["USER_ID"])){
        echo "session set";
    }else{
        echo "session not set";
    }
    echo $id.$name.$class.$user;

    if($_SERVER['REQUEST_METHOD'] === "GET"){
        $query2 = "SELECT * FROM payment WHERE s_id = '$user' AND c_id = '$class' AND stat = '1'";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) > 0){
            header("location: classes.php?title=Class Alredy Added..!&msg=Class has already added.&type=info&id=".$id."&name=".$name."");
            exit();
        }

        $query = "INSERT INTO payment(s_id, c_id, payment, stat, datatime) VALUES ('$user', '$class', '0', '1', '$date_time')";
        $result = mysqli_query($conn, $query);
        if($result == 1){
            header("location: classes.php?title=Class Added..!&msg=Class has added successfully.&type=success&id=".$id."&name=".$name."");
            exit();
        }else{
            header("location: classes.php?title=Unexpected Error..!&msg=Unexpected error occured, Please try again.&type=error&id=".$id."&name=".$name."");
            exit();
        }
    }

?>