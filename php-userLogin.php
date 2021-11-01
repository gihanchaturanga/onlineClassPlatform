<?php

    include 'dbconn.php';

    $position = clear($_POST['position']);
    $mobile = clear($_POST['mobile']);
    $pwd = clear($_POST['pwd']);
    $remember = $_POST['remember'];
    echo $position.$mobile.$pwd.$remember;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<br> inside server method";
        if($position != "" && $mobile != "" && $pwd != ""){
            echo "<br>no empty fields";
            if($position == 1){
                echo "<br> came in to positio teacher-1";
                $query = "SELECT * FROM teacher WHERE mobile = '$mobile' AND stat = '1' AND password = '$pwd'";
                $result = mysqli_query($conn, $query);
                if($result && mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                    $_SESSION["ADMIN_ID"] = $row['id'];
                    $_SESSION["ADMIN_NAME"] = $row['name'];
                    $_SESSION["POSITION"] = $position;
                    echo "<br>sessions set";
                    
                    if($remember == 1){
                        setcookie("ADMIN_ID", $row['id'], time()+2592000);
                        setcookie("POSITION", $position, time()+2592000);
                        echo "cookie set<br>";
                    }
                    header("location: addClass.php?Regular");
                    exit();
                }else{
                    header("location: userLogin.php?title=Wrong Username or Password..!&msg=Please check your username and password.&type=error");
                    exit();
                }
            }elseif($position == 2){
                $query = "SELECT * FROM system_users WHERE mobile = '$mobile' AND stat = '1' AND password = '$pwd' AND position = '$position'";
                $result = mysqli_query($conn, $query);
                if($result && mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                    $_SESSION["ADMIN_ID"] = $row['id'];
                    $_SESSION["ADMIN_NAME"] = $row['name'];
                    $_SESSION["POSITION"] = $position;
                    
                    if($remember == 1){
                        setcookie("ADMIN_ID", $row['id'], time()+2592000);
                        setcookie("POSITION", $position, time()+2592000);
                        echo "cookie set<br>";
                    }
                    header("location: payment.php?Regular");
                    exit();
                }else{
                    header("location: userLogin.php?title=Wrong Username or Password..!&msg=Please check your username and password.&type=error");
                    exit();
                }
            }else{
                header("location: userLogin.php?title=NOT AUTHORIZED&msg=You are not an authorized person, Plese change the position and try again.&type=error");
                exit();
            }




        }else{
            header("location: userLogin.php?title=Fill All Fields..!&msg=Fill all of the empty fields.&type=info");
            exit();
        }
    }else{
        echo "sever method does not match";
    }

?>