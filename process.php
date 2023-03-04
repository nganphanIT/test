<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $conn = new mysqli($servername,$username,$password,"test");
    if ($conn->connect_error) {
        echo "Không thể kết nối tới cơ sở dữ liệu: " . $conn -> connect_error;
        exit();
    }
?>
