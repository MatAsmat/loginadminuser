<?php
    // สร้างการเชื่อมต่อกับฐานข้อมูล xampp จะไม่มี password
    $conn = mysqli_connect("localhost", "root", "", "loginadminuser");
    // เช็ค error
    if (!$conn) {
        die("Failed to connec to database " .mysqli_error($conn));
    }
?>

