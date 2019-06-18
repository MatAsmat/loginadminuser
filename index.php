<!-- (5) -->
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- (1) -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- (2) -->
    <form action="login.php" method="post">
    <!-- ================== -->
    <div class="login-wrapper">
    <div class="login-left">
    <img src="https://cdn.pixabay.com/photo/2015/08/20/02/04/delicate-arch-896885_960_720.jpg">
    <div class="h1">Click to Login
    <!-- (6) -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
<!-- ================ -->
    <div class="login-right">
        <div class="h2">Login</div>
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" required>
            <label for="username">Username</label>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <!-- (3) -->
        <!-- <label for="username">ชื่อผู้ใช้</label>
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <label for="password">รหัสผ่าน</label>
        <input type="password" name="password" placeholder="Password" required>
        <br> -->
        <div class="button-area">
        <button class="btn btn-secondary"> 
        <a href="register.php">Register</a>
        </button>
        <!-- <input type="submit" name="submit" value="Login"> -->
        <button class="btn btn-primary" type="submit" name="submit">Login</button>
    </form>
    <!-- (4) -->
    <!-- <a href="register.php">Go to register</a> -->
    <script src="script.js"></script>
</body>
</html>
<!-- (7) -->
<?php // เมื่อกดปุ่ม refresh ที่แสดงข้อความออกมาจะหายไป
    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }
?>

