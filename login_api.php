<?php
$servername = "localhost:3307"; 
$username="root";
$password="123456";
$bdname="st_henry_db";

            $conn=new mysqli($servername,$username,$password,$bdname);

            $login_name = $_GET["loginName"];
            $user_password = $_GET["password"];

            $query = "SELECT * FROM admins where Username = '$login_name' " . 
            "AND Password = '$user_password'";
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