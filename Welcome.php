<?php
require_once 'creds.php';
$conn = new mysqli($host, $user, $pass, $dbname, $port);
if ($conn->connect_error) {
    die("Fatal Error");
}
setcookie("count", 15,time() + 60 * 60* 60* 24, "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav bar</title>
    <link rel="stylesheet" href="Welcome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <nav class="navbar">
        <span class="toggle-nav" id="toggle-nav">
            <i class="material-icons">menu</i>
        </span>
        <!-- <div class=""> -->
        <a href="#" class="logo"><img src="CameronLogo.png" alt="">
            <p>Student Enrollment</p>
        </a>
        <!-- </div> -->
        <ul class="main-nav" id="main-nav">
            <li><a href="login.php" class="nav-links">Login</a></li>
            <li><a href="signup_page.php" class="nav-links">Sign Up</a></li>
        </ul>
    </nav>
    <div id="welcome">Welcome to Cameron University</div>
    <script>
        let mainNav = document.getElementById('main-nav');
        let toggleNav = document.getElementById('toggle-nav');
        toggleNav.addEventListener('click', function () {
            mainNav.classList.toggle('active')
        });
    </script>
</body>

</html>
