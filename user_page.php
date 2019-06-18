<!-- (1) -->
<?php
    session_start();
    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
<!-- (2) -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="login-wrapper">
        <div class="login-left">
            <img src="https://cdn.pixabay.com/photo/2015/12/05/06/20/kid-1077793_960_720.jpg">
            <!-- (3) -->
            <div class="h1">You are Member
            <h3>Hi, <?php echo $_SESSION['user']; ?></h3> 
            <p><a href="logout.php">logout</a></p></div>
</body>
</html>
<?php } ?>


