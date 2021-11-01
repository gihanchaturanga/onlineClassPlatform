<?php
include 'dbconn.php';

$name = clear($_POST['name']);
$name = ucwords($name);
$subjects = clear($_POST['subjects']);
$mobile = clear($_POST['mobile']);
$mobile = str_replace(array('(',')',' ','-'), '',$mobile);
$pwd1 = clear($_POST['pwd1']);
$pwd2 = clear($_POST['pwd2']);
echo $name.$subjects.$mobile.$pwd1.$pwd2;

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if($pwd1 == $pwd2){

        $query = "SELECT * FROM teacher WHERE mobile = '$mobile'";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($res);
        if(mysqli_num_rows($res) > 0){
            echo "came";
            header("location: addTeacher.php?title=Teacher Exists..!&msg=Teacher - ".$name." already exists.&type=info");
            exit();   
        }else{
            echo "came here";
            $query2 = "INSERT INTO teacher (name, mobile, subjects, password, stat, datatime) VALUES ('$name', '$mobile', '$subjects', '$pwd1', '1', '$date_time')";
            $res2 = mysqli_query($conn, $query2);
            echo "came also here";
            if($res2 == 1){
                header("location: addTeacher.php?title=Teacher Added..!&msg=Teacher - ".$name." added successfully.&type=success");
                exit(); 
            }else{
                header("location: addTeacher.php?title=Unexpected Erro..!&msg=Unexpected Error Occured, Please try again.&type=error");
                exit(); 
            }
            
        }
    }else{
        header("location: addTeacher.php?title=Passwords Not Match..!&msg=Entered passwords does not match each other.&type=warning");
        exit();
    }
}


?>