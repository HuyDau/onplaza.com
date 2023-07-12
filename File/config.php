<?php
    $sever_username = "cakebake_db";
    $server_password = "aPY1nqWoay7w";
    $sever_host = "localhost";
    $database = 'cakebake_db';
    $conn = mysqli_connect($sever_host, $sever_username, $server_password, $database) or die("Không thể kết nối tới Database !");
    mysqli_query($conn, "SET NAMES 'UTF8'");
?>