<?php 
    session_start();
    // เช็คมีการ login เข้ามา แล้วเช็คสถานะว่าเป็น member หรือ admin
    if (isset($_POST['username'])) {
        include('connection.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname']; //คือการรวมของ ชื่อ-นามสกุล เอามาไว้ใน user
            $_SESSION['userlevel'] = $row['userlevel'];
            //แบ่ง session การเข้าสู่ระบบ หน้า regis admin และ member-user
            if ($_SESSION['userlevel'] == 'r') {
                header("Location: regis_page.php");
            }
            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }
            if ($_SESSION['userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } else {
          echo "<script>alert('User หรือ Password ไม่ถูกต้อง');</script>";
        }
    } else {
        header("Location: index.php");
    }
?>


