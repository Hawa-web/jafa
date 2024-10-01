<?php

$servername = "localhost:3307"; 
$username="root";
$password="123456";
$bdname="admin_panel";

            $conn=new mysqli($servername,$username,$password,$bdname);

            $login_name = $_GET["loginName"];
            $user_password = $_GET["password"];

            $query = "SELECT * FROM admins where username = '$login_name' " . 
            "AND user_password = '$user_password'";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn). "" . $query);
                $rows = mysqli_num_rows($result);
                if($rows==1){
                    session_start(); $_SESSION['login_name'] = $login_name;
                    echo "Granted";
                    exit();
                }
                else {
                    echo "DENIED";
                }
                $conn->close();
?>