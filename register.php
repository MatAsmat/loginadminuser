<!-- (5) php ทั้งหมด-->
<?php 
    session_start();
    require_once "connection.php";
    if (isset($_POST['submit'])) { //เช็คเมื่อมีการกดปุ่ม submit
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        //ทำการเช็คสำหรับคนเข้ารหัสคนที่สองไม่ให้ซ้ำกันกับคนที่1
        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
        // เป็นการเข้าถึง array
        if ($user['username'] == $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);//passwordenc คือ ไม่ให้แสดงค่าจริงของ Password
            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");

            }
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <!-- (1) -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- (2)ให้ทำงานไฟล์มันเองไม่เด้งไปไหน -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="login-wrapper">

        <div class="login-left">
            <img src="https://cdn.pixabay.com/photo/2015/11/04/20/59/milky-way-1023340_960_720.jpg">
            <div class="h1">Click to Register</div>
        </div>

        <div class="login-right">
                <div class="h2">Register</div>
                <div class="form-group">
                    <input type="text" name="username"  placeholder="Username" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password"  placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-group">
                    <input type="text" name="firstname"  placeholder="First Name" required>
                    <label for="firstname">First Name</label>
                </div>
                <div class="form-group">
                    <input type="text" name="lastname"  placeholder="Last Name" required>
                    <label for="lastname">Last Name</label>
                </div>
        <!-- (3) -->
        <!-- <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        <br> -->
        <!-- <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
        <br>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <br> -->
        <!-- <input type="submit" name="submit" value="Submit">

        <button type="submit" name="submit">Register</button> -->
        <div class="button-area">
        <button class="btn btn-secondary"> 
        <a href="index.php">Login</a>
        </button>
        <!-- <button class="btn btn-secondary" type="submit" name="submit">Login</button> -->
        <button class="btn btn-primary" type="submit" name="submit">Register</button>
    </form>
    <!-- (4) -->
   <!-- <br> <a href="index.php">Go back to index</a> -->
    <script src="script.js"></script>
</body>
</html>

