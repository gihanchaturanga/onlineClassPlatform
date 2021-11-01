<?php
    include 'dbconn.php';

    $fname = clear($_POST['fname']);
    $lname = clear($_POST['lname']);
    $dob = clear($_POST['dob']);
    $mobile = clear($_POST['mobile']);
    $scl = clear($_POST['scl']);
    $address = clear($_POST['address']);
    $pwd1 = clear($_POST['pwd1']);
    $pwd2 = clear($_POST['pwd2']);
    $name = $fname." ".$lname;
    $name = ucwords($name);
    $mobile = str_replace(array('(',')',' ','-'), '',$mobile);
    $scl = str_replace(array('\''), '',$scl);
    echo $name.$dob.$mobile.$scl.$address.$pwd1.$pwd2."<br>";

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if($fname != "" && $lname != "" && $dob != "" && $mobile != "" && $scl != "" && $address != "" && $pwd1 != "" && $pwd2 != ""){
            if($pwd1 == $pwd2){
                $query = "SELECT * FROM student WHERE mobile = '$mobile'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    header("location: register.php?title=Student Exists..!&msg=You have already registerd, Please login.&type=info");
                    exit(); 
                }else{
                    $query = "INSERT INTO student (name, dob, mobile, school, address, password, stat, datatime) VALUES ('$name', '$dob', '$mobile', '$scl', '$address', '$pwd1', '1', '$date_time')";
                    $res = mysqli_query($conn, $query);
                    if($res == 1){
                        echo "success";
                        header("location: index.php?title=Success..!&msg=You have registered successfully. Please login.&type=success");
                        exit();                     
                    }else{
                        echo "unexpected";
                        header("location: register.php?title=Error..!&msg=Unexpected error occured, Please try again.&type=error");
                        exit();                     
                    }
                }

            }else{
                echo "password error";
                header("location: register.php?title=Password Error..!&msg=Apply same password to the both passowrd fields.&type=error");
                exit();  
            }
        }else{
            echo "fill all";
            header("location: register.php?title=Empty Fields..!&msg=Fill all of the fields.&type=warning");
            exit();
        }
    }
    

?>

