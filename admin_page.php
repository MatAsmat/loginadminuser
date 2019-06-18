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
    <title>Admin Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="login-wrapper">
        <div class="login-left">
            <img src="https://cdn.pixabay.com/photo/2015/03/26/09/41/tie-690084_960_720.jpg">
            <div class="h1">You are Admin
            <h3>Hi, <?php echo $_SESSION['user']; ?></h3> 
            <p><a href="logout.php">logout</a></p></div>
</body>
</html>
<?php } ?>


